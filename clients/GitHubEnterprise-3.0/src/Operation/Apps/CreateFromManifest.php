<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class CreateFromManifest
{
    public const OPERATION_ID = 'apps/create-from-manifest';
    public const OPERATION_MATCH = 'POST /app-manifests/{code}/conversions';
    private const METHOD = 'POST';
    private const PATH = '/app-manifests/{code}/conversions';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private string $code;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $hydrator, string $code)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->code = $code;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Apps\CreateFromManifest\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{code}'), array($this->code), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201::class, $body);
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
            /**Validation failed**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ValidationErrorSimple::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
