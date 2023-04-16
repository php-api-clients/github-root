<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddSelfHostedRunnerToGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/add-self-hosted-runner-to-group-for-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;

    public function __construct(string $enterprise, int $runnerGroupId, int $runnerId)
    {
        $this->enterprise    = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
        $this->runnerId      = $runnerId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}', '{runner_group_id}', '{runner_id}'], [$this->enterprise, $this->runnerGroupId, $this->runnerId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
