<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListCommitStatusesForRefListing
{
    public const OPERATION_ID    = 'repos/list-commit-statuses-for-ref';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/commits/{ref}/statuses';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/commits/{ref}/statuses';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses $hydrator)
    {
    }

    /** @return (iterable<Schema\Status> | Schema\BasicError) */
    public function call(string $owner, string $repo, string $ref, int $perPage = 30, int $page = 1): iterable|BasicError
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Repos\ListCommitStatusesForRefListing($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|BasicError|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
