<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RevokeAuthorizationForApplication
{
    public const OPERATION_ID = 'apps/revoke-authorization-for-application';
    public const OPERATION_MATCH = 'DELETE /applications/{client_id}/tokens/{access_token}';
    private const METHOD = 'DELETE';
    private const PATH = '/applications/{client_id}/tokens/{access_token}';
    /**The client ID of your GitHub app.**/
    private string $client_id;
    private string $access_token;
    public function __construct(string $client_id, string $access_token)
    {
        $this->client_id = $client_id;
        $this->access_token = $access_token;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{client_id}', '{access_token}'), array($this->client_id, $this->access_token), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
