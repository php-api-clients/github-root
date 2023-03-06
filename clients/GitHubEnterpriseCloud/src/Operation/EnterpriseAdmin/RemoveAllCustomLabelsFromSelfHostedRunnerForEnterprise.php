<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/remove-all-custom-labels-from-self-hosted-runner-for-enterprise';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}/labels';
    private const METHOD = 'DELETE';
    private const PATH = '/enterprises/{enterprise}/actions/runners/{runner_id}/labels';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator, string $enterprise, int $runner_id)
    {
        $this->enterprise = $enterprise;
        $this->runner_id = $runner_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{runner_id}'), array($this->enterprise, $this->runner_id), self::PATH));
    }
    /**
     * @return Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200|Schema\BasicError|Schema\ValidationErrorSimple
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200|Schema\BasicError|Schema\ValidationErrorSimple
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\Applicationjson\H200::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
