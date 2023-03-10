<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class AddSelectedRepoToRequiredWorkflow
{
    public const OPERATION_ID = 'actions/add-selected-repo-to-required-workflow';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the required workflow.**/
    private int $required_workflow_id;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    public function __construct(string $org, int $required_workflow_id, int $repository_id)
    {
        $this->org = $org;
        $this->required_workflow_id = $required_workflow_id;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{required_workflow_id}', '{repository_id}'), array($this->org, $this->required_workflow_id, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
