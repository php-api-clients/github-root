<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RemoveMembershipForUserInOrg
{
    public const OPERATION_ID = 'teams/remove-membership-for-user-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/teams/{team_slug}/memberships/{username}';
    private string $org;
    /**team_slug parameter**/
    private string $team_slug;
    private string $username;
    public function __construct(string $org, string $team_slug, string $username)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{username}'), array($this->org, $this->team_slug, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
