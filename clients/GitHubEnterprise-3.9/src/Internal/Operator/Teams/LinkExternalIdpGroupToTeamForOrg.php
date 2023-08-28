<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Teams;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class LinkExternalIdpGroupToTeamForOrg
{
    public const OPERATION_ID    = 'teams/link-external-idp-group-to-team-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/external-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\ExternalGroups $hydrator)
    {
    }

    /** @return Schema\ExternalGroup */
    public function call(string $org, string $teamSlug, array $params): ExternalGroup|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams\LinkExternalIdpGroupToTeamForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ExternalGroup|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
