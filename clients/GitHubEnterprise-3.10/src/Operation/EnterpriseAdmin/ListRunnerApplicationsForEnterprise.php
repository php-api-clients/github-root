<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListRunnerApplicationsForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-runner-applications-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runners/downloads';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/runners/downloads';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;

    public function __construct(string $enterprise)
    {
        $this->enterprise = $enterprise;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
