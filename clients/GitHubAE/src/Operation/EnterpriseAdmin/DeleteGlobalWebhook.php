<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeleteGlobalWebhook
{
    public const OPERATION_ID = 'enterprise-admin/delete-global-webhook';
    public const OPERATION_MATCH = 'DELETE /admin/hooks/{hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/hooks/{hook_id}';
    /**The unique identifier of the hook.**/
    private int $hook_id;
    public function __construct(int $hook_id)
    {
        $this->hook_id = $hook_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{hook_id}'), array($this->hook_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
