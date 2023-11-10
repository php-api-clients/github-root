<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateOrUpdateIdpGroupConnectionsInOrg
{
    public const OPERATION_ID    = 'teams/create-or-update-idp-group-connections-in-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/team-sync/group-mappings';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\TeamSync\GroupMappings $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $teamSlug, array $params): GroupMapping
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $teamSlug);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GroupMapping {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
