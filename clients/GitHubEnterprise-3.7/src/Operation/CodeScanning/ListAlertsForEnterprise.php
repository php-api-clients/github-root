<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\CodeScanning;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListAlertsForEnterprise
{
    public const OPERATION_ID = 'code-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/code-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/enterprises/{enterprise}/code-scanning/alerts';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private string|null $tool_guid;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.7/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.7/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private string $after;
    /**If specified, only code scanning alerts with this state will be returned.**/
    private string $state;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The property by which to sort the results.**/
    private string $sort;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts $hydrator, string $enterprise, string $tool_name, string|null $tool_guid, string $before, string $after, string $state, int $page = 1, int $per_page = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->enterprise = $enterprise;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->before = $before;
        $this->after = $after;
        $this->state = $state;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{tool_name}', '{tool_guid}', '{before}', '{after}', '{state}', '{page}', '{per_page}', '{direction}', '{sort}'), array($this->enterprise, $this->tool_name, $this->tool_guid, $this->before, $this->after, $this->state, $this->page, $this->per_page, $this->direction, $this->sort), self::PATH . '?tool_name={tool_name}&tool_guid={tool_guid}&before={before}&after={after}&state={state}&page={page}&per_page={per_page}&direction={direction}&sort={sort}'));
    }
    /**
     * @return \Rx\Observable<Schema\CodeScanningOrganizationAlertItems>|Schema\BasicError|Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|Schema\BasicError|Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Service unavailable**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CodeScanningOrganizationAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CodeScanningOrganizationAlertItems {
                            return $this->hydrator->hydrateObject('Schema\\CodeScanningOrganizationAlertItems', $body);
                        });
                }
                break;
            /**Service unavailable**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('Schema\\BasicError', $body);
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\CodeScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('Schema\\Operation\\CodeScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
