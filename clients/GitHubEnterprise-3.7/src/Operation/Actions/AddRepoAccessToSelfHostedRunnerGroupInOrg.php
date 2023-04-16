<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddRepoAccessToSelfHostedRunnerGroupInOrg
{
    public const OPERATION_ID    = 'actions/add-repo-access-to-self-hosted-runner-group-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    /**The unique identifier of the repository.**/
    private int $repositoryId;

    public function __construct(string $org, int $runnerGroupId, int $repositoryId)
    {
        $this->org           = $org;
        $this->runnerGroupId = $runnerGroupId;
        $this->repositoryId  = $repositoryId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{runner_group_id}', '{repository_id}'], [$this->org, $this->runnerGroupId, $this->repositoryId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
