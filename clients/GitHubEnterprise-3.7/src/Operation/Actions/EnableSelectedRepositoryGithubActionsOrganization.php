<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class EnableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID = 'actions/enable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/permissions/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    public function __construct(string $org, int $repository_id)
    {
        $this->org = $org;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repository_id}'), array($this->org, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
