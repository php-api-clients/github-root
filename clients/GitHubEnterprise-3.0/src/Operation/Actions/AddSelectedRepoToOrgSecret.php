<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class AddSelectedRepoToOrgSecret
{
    public const OPERATION_ID = 'actions/add-selected-repo-to-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}';
    private string $org;
    /**secret_name parameter**/
    private string $secret_name;
    private int $repository_id;
    public function __construct(string $org, string $secret_name, int $repository_id)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}', '{repository_id}'), array($this->org, $this->secret_name, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
