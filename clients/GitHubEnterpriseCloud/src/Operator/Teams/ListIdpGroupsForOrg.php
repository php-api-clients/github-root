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

final readonly class ListIdpGroupsForOrg
{
    public const OPERATION_ID    = 'teams/list-idp-groups-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/team-sync/groups';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/team-sync/groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\TeamSync\Groups $hydrator)
    {
    }

    /**
     * @return PromiseInterface<GroupMapping>
     **/
    public function call(string $org, string $page, string $q, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams\ListIdpGroupsForOrg($this->responseSchemaValidator, $this->hydrator, $org, $page, $q, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GroupMapping {
            return $operation->createResponse($response);
        });
    }
}
