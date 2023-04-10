<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Teams;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RemoveRepoLegacy
{
    public const OPERATION_ID = 'teams/remove-repo-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD = 'DELETE';
    private const PATH = '/teams/{team_id}/repos/{owner}/{repo}';
    private int $teamId;
    private string $owner;
    private string $repo;
    public function __construct(int $teamId, string $owner, string $repo)
    {
        $this->teamId = $teamId;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{team_id}', '{owner}', '{repo}'), array($this->teamId, $this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
