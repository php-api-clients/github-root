<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddSelfHostedRunnerToGroupForOrg
{
    public const OPERATION_ID    = 'actions/add-self-hosted-runner-to-group-for-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;

    public function __construct(string $org, int $runnerGroupId, int $runnerId)
    {
        $this->org           = $org;
        $this->runnerGroupId = $runnerGroupId;
        $this->runnerId      = $runnerId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{runner_group_id}', '{runner_id}'], [$this->org, $this->runnerGroupId, $this->runnerId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
