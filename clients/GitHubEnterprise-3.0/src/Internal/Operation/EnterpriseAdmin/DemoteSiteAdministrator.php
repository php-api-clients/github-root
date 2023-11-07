<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DemoteSiteAdministrator
{
    public const OPERATION_ID    = 'enterprise-admin/demote-site-administrator';
    public const OPERATION_MATCH = 'DELETE /users/{username}/site_admin';

    public function __construct(private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{username}'], [$this->username], '/users/{username}/site_admin'));
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
