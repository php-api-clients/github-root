<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class AddRepoAccessToSelfHostedRunnerGroupInOrg
{
    public const OPERATION_ID = 'actions/add-repo-access-to-self-hosted-runner-group-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}';
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runner_group_id;
    private int $repository_id;
    public function __construct(string $org, int $runner_group_id, int $repository_id)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_group_id}', '{repository_id}'), array($this->org, $this->runner_group_id, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
