<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class EnableSelectedOrganizationGithubActionsEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/enable-selected-organization-github-actions-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}';
    private const METHOD = 'PUT';
    private const PATH = '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**The unique identifier of the organization.**/
    private int $org_id;
    public function __construct(string $enterprise, int $org_id)
    {
        $this->enterprise = $enterprise;
        $this->org_id = $org_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{org_id}'), array($this->enterprise, $this->org_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
