<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSelfHostedRunnerGroupFromEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/delete-self-hosted-runner-group-from-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;

    public function __construct(string $enterprise, int $runnerGroupId)
    {
        $this->enterprise    = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}', '{runner_group_id}'], [$this->enterprise, $this->runnerGroupId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
