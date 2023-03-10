<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListProvisionedIdentitiesEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/list-provisioned-identities-enterprise';
    public const OPERATION_MATCH = 'GET /scim/v2/Users';
    private const METHOD = 'GET';
    private const PATH = '/scim/v2/Users';
    /**If specified, only results that match the specified filter will be returned. Multiple filters are not supported. Possible filters are `userName`, `externalId`, `id`, and `displayName`. For example, `?filter="externalId eq '9138790-10932-109120392-12321'"`.**/
    private string $filter;
    /**Excludes the specified attribute from being returned in the results. Using this parameter can speed up response time.**/
    private string $excludedAttributes;
    /**Used for pagination: the starting index of the first result to return when paginating through values.**/
    private int $startIndex;
    /**Used for pagination: the number of results to return per page.**/
    private int $count;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Scim\V2\Users $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Scim\V2\Users $hydrator, string $filter, string $excludedAttributes, int $startIndex = 1, int $count = 30)
    {
        $this->filter = $filter;
        $this->excludedAttributes = $excludedAttributes;
        $this->startIndex = $startIndex;
        $this->count = $count;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{filter}', '{excludedAttributes}', '{startIndex}', '{count}'), array($this->filter, $this->excludedAttributes, $this->startIndex, $this->count), self::PATH . '?filter={filter}&excludedAttributes={excludedAttributes}&startIndex={startIndex}&count={count}'));
    }
    /**
     * @return Schema\ScimEnterpriseUserList
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ScimEnterpriseUserList
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Success, either users were found or not found**/
            case 200:
                switch ($contentType) {
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimEnterpriseUserList::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ScimEnterpriseUserList::class, $body);
                }
                break;
            /**Bad request**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                }
                break;
            /**Too many requests**/
            case 429:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                }
                break;
            /**Internal server error**/
            case 500:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ScimError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
