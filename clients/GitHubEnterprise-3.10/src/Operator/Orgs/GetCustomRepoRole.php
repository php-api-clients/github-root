<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Orgs;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCustomRepoRole
{
    public const OPERATION_ID    = 'orgs/get-custom-repo-role';
    public const OPERATION_MATCH = 'GET /orgs/{org}/custom-repository-roles/{role_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/custom-repository-roles/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId $hydrator)
    {
    }

    /** @return PromiseInterface<OrganizationCustomRepositoryRole> **/
    public function call(string $org, int $roleId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Orgs\GetCustomRepoRole($this->responseSchemaValidator, $this->hydrator, $org, $roleId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationCustomRepositoryRole {
            return $operation->createResponse($response);
        });
    }
}
