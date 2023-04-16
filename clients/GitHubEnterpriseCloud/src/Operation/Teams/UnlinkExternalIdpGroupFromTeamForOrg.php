<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UnlinkExternalIdpGroupFromTeamForOrg
{
    public const OPERATION_ID    = 'teams/unlink-external-idp-group-from-team-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/external-groups';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/external-groups';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;

    public function __construct(string $org, string $teamSlug)
    {
        $this->org      = $org;
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}'], [$this->org, $this->teamSlug], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
