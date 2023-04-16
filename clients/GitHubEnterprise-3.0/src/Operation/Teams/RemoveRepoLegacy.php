<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRepoLegacy
{
    public const OPERATION_ID    = 'teams/remove-repo-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/repos/{owner}/{repo}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/repos/{owner}/{repo}';
    private int $teamId;
    private string $owner;
    private string $repo;

    public function __construct(int $teamId, string $owner, string $repo)
    {
        $this->teamId = $teamId;
        $this->owner  = $owner;
        $this->repo   = $repo;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{owner}', '{repo}'], [$this->teamId, $this->owner, $this->repo], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
