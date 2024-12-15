<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteImpersonationOAuthToken
{
    public const OPERATION_ID    = 'enterprise-admin/delete-impersonation-o-auth-token';
    public const OPERATION_MATCH = 'DELETE /admin/users/{username}/authorizations';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{username}'], [$this->username], '/admin/users/{username}/authorizations'));
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
