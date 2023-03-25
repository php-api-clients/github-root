<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DeletePreReceiveHook
{
    public const OPERATION_ID = 'enterprise-admin/delete-pre-receive-hook';
    public const OPERATION_MATCH = 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/pre-receive-hooks/{pre_receive_hook_id}';
    /**The unique identifier of the pre-receive hook.**/
    private int $preReceiveHookId;
    public function __construct(int $preReceiveHookId)
    {
        $this->preReceiveHookId = $preReceiveHookId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{pre_receive_hook_id}'), array($this->preReceiveHookId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
