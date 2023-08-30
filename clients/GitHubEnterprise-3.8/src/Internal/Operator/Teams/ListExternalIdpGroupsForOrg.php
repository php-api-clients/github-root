<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Teams;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListExternalIdpGroupsForOrg
{
    public const OPERATION_ID    = 'teams/list-external-idp-groups-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\ExternalGroups $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $page, string $displayName, int $perPage = 30): ExternalGroups|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams\ListExternalIdpGroupsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $page, $displayName, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroups|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
