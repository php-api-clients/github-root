<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RemoveMembershipForUserLegacy
{
    public const OPERATION_ID = 'teams/remove-membership-for-user-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/memberships/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/teams/{team_id}/memberships/{username}';
    private int $team_id;
    private string $username;
    public function __construct(int $team_id, string $username)
    {
        $this->team_id = $team_id;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{username}'), array($this->team_id, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
