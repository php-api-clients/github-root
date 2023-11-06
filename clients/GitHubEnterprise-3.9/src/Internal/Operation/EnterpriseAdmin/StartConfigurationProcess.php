<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class StartConfigurationProcess
{
    public const OPERATION_ID    = 'enterprise-admin/start-configuration-process';
    public const OPERATION_MATCH = 'POST /setup/api/configure';

    public function __construct()
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace([], [], '/setup/api/configure'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 202:
                return new WithoutBody(202, []);
            /**
             * Unauthorized
             **/

            case 401:
                return new WithoutBody(401, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
