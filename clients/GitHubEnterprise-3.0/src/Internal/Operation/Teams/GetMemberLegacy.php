<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class GetMemberLegacy
{
    public const OPERATION_ID    = 'teams/get-member-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/members/{username}';

    public function __construct(private int $teamId, private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{team_id}', '{username}'], [$this->teamId, $this->username], '/teams/{team_id}/members/{username}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * if user is a member
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * if user is not a member
             **/

            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
