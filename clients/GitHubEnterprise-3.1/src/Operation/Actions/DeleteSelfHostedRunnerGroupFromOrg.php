<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteSelfHostedRunnerGroupFromOrg
{
    public const OPERATION_ID    = 'actions/delete-self-hosted-runner-group-from-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;

    public function __construct(string $org, int $runnerGroupId)
    {
        $this->org           = $org;
        $this->runnerGroupId = $runnerGroupId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{runner_group_id}'], [$this->org, $this->runnerGroupId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
