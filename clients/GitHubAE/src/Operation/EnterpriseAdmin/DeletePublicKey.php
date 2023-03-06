<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeletePublicKey
{
    public const OPERATION_ID = 'enterprise-admin/delete-public-key';
    public const OPERATION_MATCH = 'DELETE /admin/keys/{key_ids}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/keys/{key_ids}';
    /**The unique identifier of the key.**/
    private string $key_ids;
    public function __construct(string $key_ids)
    {
        $this->key_ids = $key_ids;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{key_ids}'), array($this->key_ids), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
