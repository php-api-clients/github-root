<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DownloadArtifactStreaming
{
    public const OPERATION_ID    = 'actions/download-artifact';
    public const OPERATION_MATCH = 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<string> */
    public function call(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions\DownloadArtifactStreaming($this->browser, $owner, $repo, $artifactId, $archiveFormat);
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
