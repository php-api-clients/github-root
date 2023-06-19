<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class StartConfigurationProcess
{
    public const OPERATION_ID    = 'enterprise-admin/start-configuration-process';
    public const OPERATION_MATCH = 'POST /setup/api/configure';
    private const METHOD         = 'POST';
    private const PATH           = '/setup/api/configure';

    public function __construct()
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 202:
                return ['code' => 202];
            /**
             * Unauthorized
             **/

            case 401:
                return ['code' => 401];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
