<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSelfHostedRunnerFromEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/delete-self-hosted-runner-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/enterprises/{enterprise}/actions/runners/{runner_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;

    public function __construct(string $enterprise, int $runnerId)
    {
        $this->enterprise = $enterprise;
        $this->runnerId   = $runnerId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}', '{runner_id}'], [$this->enterprise, $this->runnerId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
