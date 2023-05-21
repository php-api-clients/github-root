<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingTeam;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateLdapMappingForTeam
{
    public const OPERATION_ID    = 'enterprise-admin/update-ldap-mapping-for-team';
    public const OPERATION_MATCH = 'PATCH /admin/ldap/teams/{team_id}/mapping';
    private const METHOD         = 'PATCH';
    private const PATH           = '/admin/ldap/teams/{team_id}/mapping';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\Ldap\Teams\TeamId\Mapping $hydrator)
    {
    }

    /**
     * @return PromiseInterface<LdapMappingTeam>
     **/
    public function call(int $teamId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): LdapMappingTeam {
            return $operation->createResponse($response);
        });
    }
}
