<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class DisableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID = 'actions/disable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/permissions/repositories/{repository_id}';
    private string $org;
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
