<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class UnlinkExternalIdpGroupFromTeamForOrg
{
    public const OPERATION_ID    = 'teams/unlink-external-idp-group-from-team-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/external-groups';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;

    public function __construct(string $org, string $teamSlug)
    {
        $this->org      = $org;
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{team_slug}'], [$this->org, $this->teamSlug], '/orgs/{org}/teams/{team_slug}/external-groups'));
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
