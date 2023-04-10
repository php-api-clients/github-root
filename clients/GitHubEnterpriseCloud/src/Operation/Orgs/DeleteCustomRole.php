<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteCustomRole
{
    public const OPERATION_ID = 'orgs/delete-custom-role';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/custom_roles/{role_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/custom_roles/{role_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the role.**/
    private int $roleId;
    public function __construct(string $org, int $roleId)
    {
        $this->org = $org;
        $this->roleId = $roleId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{role_id}'), array($this->org, $this->roleId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
