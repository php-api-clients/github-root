<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Scim;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class ListProvisionedIdentities
{
    public const OPERATION_ID = 'scim/list-provisioned-identities';
    public const OPERATION_MATCH = 'GET /scim/v2/organizations/{org}/Users';
    private const METHOD = 'GET';
    private const PATH = '/scim/v2/organizations/{org}/Users';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Used for pagination: the index of the first result to return.**/
    private int $startIndex;
    /**Used for pagination: the number of results to return.**/
    private int $count;
    /**Filters results using the equals query parameter operator (`eq`). You can filter results that are equal to `id`, `userName`, `emails`, and `external_id`. For example, to search for an identity with the `userName` Octocat, you would use this query:
    
    `?filter=userName%20eq%20\"Octocat\"`.
    
    To filter results for the identity with the email `octocat@github.com`, you would use this query:
    
    `?filter=emails%20eq%20\"octocat@github.com\"`.**/
    private string $filter;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users $hydrator, string $org, int $startIndex, int $count, string $filter)
    {
        $this->org = $org;
        $this->startIndex = $startIndex;
        $this->count = $count;
        $this->filter = $filter;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{startIndex}', '{count}', '{filter}'), array($this->org, $this->startIndex, $this->count, $this->filter), self::PATH . '?startIndex={startIndex}&count={count}&filter={filter}'));
    }
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : mixed
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ScimError(404, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Forbidden
                    **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ScimError(403, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Bad request
                    **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Too many requests
                    **/
                    case 429:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ScimError(429, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
