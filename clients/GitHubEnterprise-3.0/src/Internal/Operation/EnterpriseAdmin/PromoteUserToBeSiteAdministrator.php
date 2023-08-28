<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class PromoteUserToBeSiteAdministrator
{
    public const OPERATION_ID    = 'enterprise-admin/promote-user-to-be-site-administrator';
    public const OPERATION_MATCH = 'PUT /users/{username}/site_admin';
    private const METHOD         = 'PUT';
    private const PATH           = '/users/{username}/site_admin';

    public function __construct(private string $username)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}'], [$this->username], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
