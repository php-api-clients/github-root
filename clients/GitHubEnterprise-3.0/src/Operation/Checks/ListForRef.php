<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Checks;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListForRef
{
    public const OPERATION_ID = 'checks/list-for-ref';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/commits/{ref}/check-runs';
    private string $owner;
    private string $repo;
    /**ref parameter**/
    private string $ref;
    /**Returns check runs with the specified `name`.**/
    private string $check_name;
    /**Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.**/
    private string $status;
    private int $app_id;
    /**Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.**/
    private string $filter;
    /**Results per page (max 100)**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns $hydrator, string $owner, string $repo, string $ref, string $check_name, string $status, int $app_id, string $filter = 'latest', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->check_name = $check_name;
        $this->status = $status;
        $this->app_id = $app_id;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{ref}', '{check_name}', '{status}', '{app_id}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->ref, $this->check_name, $this->status, $this->app_id, $this->filter, $this->per_page, $this->page), self::PATH . '?check_name={check_name}&status={status}&app_id={app_id}&filter={filter}&per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Checks\ListForSuite\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
