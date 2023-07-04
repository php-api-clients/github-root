<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListIdpGroupsForLegacy
{
    public const OPERATION_ID    = 'teams/list-idp-groups-for-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/team-sync/group-mappings';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/team-sync/group-mappings';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Teams\TeamId\TeamSync\GroupMappings $hydrator)
    {
    }

    /** @return PromiseInterface<GroupMapping> **/
    public function call(int $teamId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams\ListIdpGroupsForLegacy($this->responseSchemaValidator, $this->hydrator, $teamId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GroupMapping {
            return $operation->createResponse($response);
        });
    }
}
