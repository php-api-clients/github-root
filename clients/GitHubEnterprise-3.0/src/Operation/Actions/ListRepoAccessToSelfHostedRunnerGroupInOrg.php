<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListRepoAccessToSelfHostedRunnerGroupInOrg
{
    public const OPERATION_ID = 'actions/list-repo-access-to-self-hosted-runner-group-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories';
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runner_group_id;
    /**Page number of the results to fetch.**/
    private int $page;
    /**Results per page (max 100)**/
    private int $per_page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories $hydrator, string $org, int $runner_group_id, int $page = 1, int $per_page = 30)
    {
        $this->org = $org;
        $this->runner_group_id = $runner_group_id;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_group_id}', '{page}', '{per_page}'), array($this->org, $this->runner_group_id, $this->page, $this->per_page), self::PATH . '?page={page}&per_page={per_page}'));
    }
    /**
     * @return Schema\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\Applicationjson\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
