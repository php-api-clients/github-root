<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Orgs;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemovePublicMembershipForAuthenticatedUser
{
    public const OPERATION_ID    = 'orgs/remove-public-membership-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/public_members/{username}';

    public function __construct(private string $org, private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/public_members/{username}'));
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
