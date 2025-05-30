<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForOrg
{
    public const OPERATION_ID    = 'repos/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repos';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Repos $hydrator)
    {
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function call(string $org, string $type, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos\ListForOrg($this->responseSchemaValidator, $this->hydrator, $org, $type, $direction, $sort, $perPage, $page);
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
