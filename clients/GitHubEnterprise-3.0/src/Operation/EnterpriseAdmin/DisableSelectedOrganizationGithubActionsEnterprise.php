<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DisableSelectedOrganizationGithubActionsEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/disable-selected-organization-github-actions-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/enterprises/{enterprise}/actions/permissions/organizations/{org_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of an organization.**/
    private int $orgId;
    public function __construct(string $enterprise, int $orgId)
    {
        $this->enterprise = $enterprise;
        $this->orgId = $orgId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{org_id}'), array($this->enterprise, $this->orgId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
