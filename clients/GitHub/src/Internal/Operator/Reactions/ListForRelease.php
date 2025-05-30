<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Reactions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForRelease
{
    public const OPERATION_ID    = 'reactions/list-for-release';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/{release_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions $hydrator)
    {
    }

    /** @return Observable<Schema\Reaction> */
    public function call(string $owner, string $repo, int $releaseId, string $content, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Reactions\ListForRelease($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $releaseId, $content, $perPage, $page);
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
