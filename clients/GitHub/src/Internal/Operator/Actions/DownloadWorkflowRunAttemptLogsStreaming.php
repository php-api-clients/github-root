<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DownloadWorkflowRunAttemptLogsStreaming
{
    public const OPERATION_ID    = 'actions/download-workflow-run-attempt-logs';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<string> */
    public function call(string $owner, string $repo, int $runId, int $attemptNumber): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $owner, $repo, $runId, $attemptNumber);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
