<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListProvisionedGroupsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/list-provisioned-groups-enterprise';
    public const OPERATION_MATCH = 'GET /scim/v2/Groups';
    /**If specified, only results that match the specified filter will be returned. Multiple filters are not supported. Possible filters are `externalId`, `id`, and `displayName`. For example, `?filter="externalId eq '9138790-10932-109120392-12321'"`. **/
    private string $filter;
    /**Excludes the specified attribute from being returned in the results. Using this parameter can speed up response time. **/
    private string $excludedAttributes;
    /**Used for pagination: the starting index of the first result to return when paginating through values. **/
    private int $startIndex;
    /**Used for pagination: the number of results to return per page. **/
    private int $count;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Scim\V2\Groups $hydrator, string $filter, string $excludedAttributes, int $startIndex = 1, int $count = 30)
    {
        $this->filter             = $filter;
        $this->excludedAttributes = $excludedAttributes;
        $this->startIndex         = $startIndex;
        $this->count              = $count;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{filter}', '{excludedAttributes}', '{startIndex}', '{count}'], [$this->filter, $this->excludedAttributes, $this->startIndex, $this->count], '/scim/v2/Groups' . '?filter={filter}&excludedAttributes={excludedAttributes}&startIndex={startIndex}&count={count}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ScimEnterpriseGroupList|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Too many requests
                     **/

                    case 429:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(429, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Internal server error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(500, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Success, either groups were found or not found
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimEnterpriseGroupList::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ScimEnterpriseGroupList::class, $body);
                    /**
                     * Bad request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Too many requests
                     **/

                    case 429:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(429, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                    /**
                     * Internal server error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(500, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Authorization failure
             **/
            case 401:
                return new WithoutBody(401, []);
            /**
             * Permission denied
             **/

            case 403:
                return new WithoutBody(403, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
