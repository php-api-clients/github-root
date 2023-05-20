<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateCustomRepoRole
{
    public const OPERATION_ID    = 'orgs/update-custom-repo-role';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/custom-repository-roles/{role_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/custom-repository-roles/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<OrganizationCustomRepositoryRole>
     **/
    public function call(string $org, int $roleId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs\UpdateCustomRepoRole($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $roleId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): OrganizationCustomRepositoryRole {
            return $operation->createResponse($response);
        });
    }
}
