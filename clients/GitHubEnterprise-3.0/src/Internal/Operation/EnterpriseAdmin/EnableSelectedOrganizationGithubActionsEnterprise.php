<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class EnableSelectedOrganizationGithubActionsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/enable-selected-organization-github-actions-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Unique identifier of an organization. **/
    private int $orgId;

    public function __construct(string $enterprise, int $orgId)
    {
        $this->enterprise = $enterprise;
        $this->orgId      = $orgId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{enterprise}', '{org_id}'], [$this->enterprise, $this->orgId], '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
