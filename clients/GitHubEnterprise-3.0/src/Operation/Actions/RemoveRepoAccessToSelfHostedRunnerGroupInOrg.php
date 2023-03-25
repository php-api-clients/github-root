<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RemoveRepoAccessToSelfHostedRunnerGroupInOrg
{
    public const OPERATION_ID = 'actions/remove-repo-access-to-self-hosted-runner-group-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;
    private int $repositoryId;
    public function __construct(string $org, int $runnerGroupId, int $repositoryId)
    {
        $this->org = $org;
        $this->runnerGroupId = $runnerGroupId;
        $this->repositoryId = $repositoryId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_group_id}', '{repository_id}'), array($this->org, $this->runnerGroupId, $this->repositoryId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
