<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class ListOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/list-org-access-to-self-hosted-runner-group-in-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations';
    private const METHOD = 'GET';
    private const PATH = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runner_group_id;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations $hydrator, string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->runner_group_id = $runner_group_id;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{runner_group_id}', '{per_page}', '{page}'), array($this->enterprise, $this->runner_group_id, $this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
