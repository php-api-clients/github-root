<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\IssueEvent;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetEvent
{
    public const OPERATION_ID    = 'issues/get-event';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/events/{event_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $eventId): IssueEvent
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\GetEvent($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $eventId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): IssueEvent {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
