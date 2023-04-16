<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

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

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
