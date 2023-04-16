<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveProjectInOrg
{
    public const OPERATION_ID    = 'teams/remove-project-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private string $org;
    /**team_slug parameter**/
    private string $teamSlug;
    private int $projectId;

    public function __construct(string $org, string $teamSlug, int $projectId)
    {
        $this->org       = $org;
        $this->teamSlug  = $teamSlug;
        $this->projectId = $projectId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{project_id}'], [$this->org, $this->teamSlug, $this->projectId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
