<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class RemoveSecurityManagerTeam
{
    public const OPERATION_ID    = 'orgs/remove-security-manager-team';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/security-managers/teams/{team_slug}';
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
        return new Request('DELETE', (string) (new UriTemplate('/orgs/{org}/security-managers/teams/{team_slug}'))->expand(['org' => $this->org, 'team_slug' => $this->teamSlug]));
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
