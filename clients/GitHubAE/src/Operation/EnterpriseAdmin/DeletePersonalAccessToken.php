<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class DeletePersonalAccessToken
{
    public const OPERATION_ID = 'enterprise-admin/delete-personal-access-token';
    public const OPERATION_MATCH = 'DELETE /admin/tokens/{token_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/admin/tokens/{token_id}';
    /**The unique identifier of the token.**/
    private int $tokenId;
    public function __construct(int $tokenId)
    {
        $this->tokenId = $tokenId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{token_id}'), array($this->tokenId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
