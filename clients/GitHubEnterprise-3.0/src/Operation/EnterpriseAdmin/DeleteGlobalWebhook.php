<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\EnterpriseAdmin;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteGlobalWebhook
{
    public const OPERATION_ID = 'enterprise-admin/delete-global-webhook';
    public const OPERATION_MATCH = 'DELETE /admin/hooks/{hook_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/hooks/{hook_id}';
    private int $hookId;
    /**This API is under preview and subject to change.**/
    private string $accept;
    public function __construct(int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->hookId = $hookId;
        $this->accept = $accept;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{hook_id}'), array($this->hookId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
