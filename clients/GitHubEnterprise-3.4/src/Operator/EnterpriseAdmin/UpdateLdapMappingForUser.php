<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateLdapMappingForUser
{
    public const OPERATION_ID    = 'enterprise-admin/update-ldap-mapping-for-user';
    public const OPERATION_MATCH = 'PATCH /admin/ldap/users/{username}/mapping';
    private const METHOD         = 'PATCH';
    private const PATH           = '/admin/ldap/users/{username}/mapping';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Admin\Ldap\Users\Username\Mapping $hydrator)
    {
    }

    /**
     * @return PromiseInterface<LdapMappingUser>
     **/
    public function call(string $username, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\UpdateLdapMappingForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): LdapMappingUser {
            return $operation->createResponse($response);
        });
    }
}
