<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class DeleteCustomRepoRole
{
    public const OPERATION_ID = 'orgs/delete-custom-repo-role';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/custom-repository-roles/{role_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/custom-repository-roles/{role_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the role.**/
    private int $roleId;
    public function __construct(string $org, int $roleId)
    {
        $this->org = $org;
        $this->roleId = $roleId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{role_id}'), array($this->org, $this->roleId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
