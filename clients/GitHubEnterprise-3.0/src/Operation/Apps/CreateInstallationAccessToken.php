<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class CreateInstallationAccessToken
{
    public const OPERATION_ID = 'apps/create-installation-access-token';
    public const OPERATION_MATCH = 'POST /app/installations/{installation_id}/access_tokens';
    private const METHOD = 'POST';
    private const PATH = '/app/installations/{installation_id}/access_tokens';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**installation_id parameter**/
    private int $installation_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $hydrator, int $installation_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->installation_id = $installation_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Apps\CreateInstallationAccessToken\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{installation_id}'), array($this->installation_id), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\InstallationToken|Schema\BasicError|Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415|Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\InstallationToken|Schema\BasicError|Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415|Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\InstallationToken::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\InstallationToken::class, $body);
                }
                break;
            /**Validation failed**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Validation failed**/
            case 415:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Apps\GetInstallation\Response\Applicationjson\H415::class, $body);
                }
                break;
            /**Validation failed**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Validation failed**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Validation failed**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ValidationError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
