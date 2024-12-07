<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class RevokeOrgRoleTeam
{
    public const OPERATION_ID    = 'orgs/revoke-org-role-team';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/organization-roles/teams/{team_slug}/{role_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the role. **/
    private int $roleId;

    public function __construct(string $org, string $teamSlug, int $roleId)
    {
        $this->org      = $org;
        $this->teamSlug = $teamSlug;
        $this->roleId   = $roleId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', (string) (new UriTemplate('/orgs/{org}/organization-roles/teams/{team_slug}/{role_id}'))->expand(['org' => $this->org, 'role_id' => $this->roleId, 'team_slug' => $this->teamSlug]));
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
