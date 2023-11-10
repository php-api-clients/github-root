<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\Repos;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListBranchesListing
{
    public const OPERATION_ID    = 'repos/list-branches';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/branches';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches $hydrator)
    {
    }

    /** @return Observable<Schema\ShortBranch> */
    public function call(string $owner, string $repo, bool $protected, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\Repos\ListBranchesListing($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $protected, $perPage, $page);
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
