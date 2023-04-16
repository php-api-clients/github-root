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

final class GetProvisioningInformationForEnterpriseGroup
{
    public const OPERATION_ID    = 'enterprise-admin/get-provisioning-information-for-enterprise-group';
    public const OPERATION_MATCH = 'GET /scim/v2/Groups/{scim_group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/scim/v2/Groups/{scim_group_id}';
    /**A unique identifier of the SCIM group.**/
    private string $scimGroupId;
    /**Excludes the specified attribute from being returned in the results. Using this parameter can speed up response time.**/
    private string $excludedAttributes;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb $hydrator, string $scimGroupId, string $excludedAttributes)
    {
        $this->scimGroupId             = $scimGroupId;
        $this->excludedAttributes      = $excludedAttributes;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{scim_group_id}', '{excludedAttributes}'], [$this->scimGroupId, $this->excludedAttributes], self::PATH . '?excludedAttributes={excludedAttributes}'));
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
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
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
