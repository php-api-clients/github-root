<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DeleteSelfHostedRunnerFromRepo
{
    public const OPERATION_ID = 'actions/delete-self-hosted-runner-from-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/repos/{owner}/{repo}/actions/runners/{runner_id}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    public function __construct(string $owner, string $repo, int $runner_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runner_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{runner_id}'), array($this->owner, $this->repo, $this->runner_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
