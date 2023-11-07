<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveRepoInOrg
{
    public const OPERATION_ID    = 'teams/remove-repo-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}';
    /**team_slug parameter **/
    private string $teamSlug;

    public function __construct(private string $org, string $teamSlug, private string $owner, private string $repo)
    {
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{team_slug}', '{owner}', '{repo}'], [$this->org, $this->teamSlug, $this->owner, $this->repo], '/orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
