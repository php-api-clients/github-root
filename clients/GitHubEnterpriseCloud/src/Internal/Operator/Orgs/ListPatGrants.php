<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListPatGrants
{
    public const OPERATION_ID    = 'orgs/list-pat-grants';
    public const OPERATION_MATCH = 'GET /orgs/{org}/personal-access-tokens';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens $hydrator)
    {
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrant> */
    public function call(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, array $tokenId, int $perPage = 30, int $page = 1, string $sort = 'created_at', string $direction = 'desc'): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Orgs\ListPatGrants($this->responseSchemaValidator, $this->hydrator, $org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $tokenId, $perPage, $page, $sort, $direction);
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
