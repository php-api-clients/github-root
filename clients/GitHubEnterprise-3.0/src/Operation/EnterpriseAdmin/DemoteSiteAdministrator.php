<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DemoteSiteAdministrator
{
    public const OPERATION_ID = 'enterprise-admin/demote-site-administrator';
    public const OPERATION_MATCH = 'DELETE /users/{username}/site_admin';
    private const METHOD = 'DELETE';
    private const PATH = '/users/{username}/site_admin';
    private string $username;
    public function __construct(string $username)
    {
        $this->username = $username;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
