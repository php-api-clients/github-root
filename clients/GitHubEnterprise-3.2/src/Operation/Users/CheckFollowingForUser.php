<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Users;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class CheckFollowingForUser
{
    public const OPERATION_ID = 'users/check-following-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/following/{target_user}';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/following/{target_user}';
    /**The handle for the GitHub user account.**/
    private string $username;
    private string $target_user;
    public function __construct(string $username, string $target_user)
    {
        $this->username = $username;
        $this->target_user = $target_user;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}', '{target_user}'), array($this->username, $this->target_user), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
