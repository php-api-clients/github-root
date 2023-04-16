<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListProvisionedIdentitiesEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-provisioned-identities-enterprise';
    public const OPERATION_MATCH = 'GET /scim/v2/Users';
    private const METHOD         = 'GET';
    private const PATH           = '/scim/v2/Users';
    /**If specified, only results that match the specified filter will be returned. Multiple filters are not supported. Possible filters are `userName`, `externalId`, `id`, and `displayName`. For example, `?filter="externalId eq '9138790-10932-109120392-12321'"`.**/
    private string $filter;
    /**Excludes the specified attribute from being returned in the results. Using this parameter can speed up response time.**/
    private string $excludedAttributes;
    /**Used for pagination: the starting index of the first result to return when paginating through values.**/
    private int $startIndex;
    /**Used for pagination: the number of results to return per page.**/
    private int $count;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Scim\V2\Users $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Scim\V2\Users $hydrator, string $filter, string $excludedAttributes, int $startIndex = 1, int $count = 30)
    {
        $this->filter                  = $filter;
        $this->excludedAttributes      = $excludedAttributes;
        $this->startIndex              = $startIndex;
        $this->count                   = $count;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{filter}', '{excludedAttributes}', '{startIndex}', '{count}'], [$this->filter, $this->excludedAttributes, $this->startIndex, $this->count], self::PATH . '?filter={filter}&excludedAttributes={excludedAttributes}&startIndex={startIndex}&count={count}'));
    }

    public function createResponse(ResponseInterface $response): mixed
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad request
                    **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Too many requests
                    **/

                    case 429:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ScimError(429, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Internal server error
                    **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ScimError(500, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
