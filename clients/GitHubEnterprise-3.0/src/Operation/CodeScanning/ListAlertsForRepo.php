<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\CodeScanning;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListAlertsForRepo
{
    public const OPERATION_ID = 'code-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/code-scanning/alerts';
    private string $owner;
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both.**/
    private string $tool_name;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both.**/
    private string|null $tool_guid;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private string $ref;
    /**Set to `open`, `fixed`, or `dismissed` to list code scanning alerts in a specific state.**/
    private string $state;
    /**Page number of the results to fetch.**/
    private int $page;
    /**Results per page (max 100)**/
    private int $per_page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $hydrator, string $owner, string $repo, string $tool_name, string|null $tool_guid, string $ref, string $state, int $page = 1, int $per_page = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tool_name = $tool_name;
        $this->tool_guid = $tool_guid;
        $this->ref = $ref;
        $this->state = $state;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{ref}', '{state}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->tool_name, $this->tool_guid, $this->ref, $this->state, $this->page, $this->per_page), self::PATH . '?tool_name={tool_name}&tool_guid={tool_guid}&ref={ref}&state={state}&page={page}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\CodeScanningAlertItems>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\CodeScanningAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CodeScanningAlertItems {
                            return $this->hydrator->hydrateObject(Schema\CodeScanningAlertItems::class, $body);
                        });
                }
                break;
            /**Response if GitHub Advanced Security is not enabled for this repository**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
