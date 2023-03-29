<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Checks;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class RerequestSuite
{
    public const OPERATION_ID = 'checks/rerequest-suite';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest';
    private const METHOD = 'POST';
    private const PATH = '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest';
    private string $owner;
    private string $repo;
    /**check_suite_id parameter**/
    private int $checkSuiteId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest $hydrator, string $owner, string $repo, int $checkSuiteId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->checkSuiteId = $checkSuiteId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->checkSuiteId), self::PATH));
    }
    /**
     * @return Schema\Operation\Checks\RerequestSuite\Response\Applicationjson\H201
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Checks\RerequestSuite\Response\Applicationjson\H201
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Checks\RerequestSuite\Response\Applicationjson\H201::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Checks\RerequestSuite\Response\Applicationjson\H201::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
