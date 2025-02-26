<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class PromoteCustomPropertyToEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/promote-custom-property-to-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/properties/schema/organizations/{org}/{custom_property_name}/promote';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The custom property name **/
    private string $customPropertyName;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\Properties\Schema\Organizations\Org\CustomPropertyName\Promote $hydrator, string $enterprise, string $org, string $customPropertyName)
    {
        $this->enterprise         = $enterprise;
        $this->org                = $org;
        $this->customPropertyName = $customPropertyName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{enterprise}', '{org}', '{custom_property_name}'], [$this->enterprise, $this->org, $this->customPropertyName], '/enterprises/{enterprise}/properties/schema/organizations/{org}/{custom_property_name}/promote'));
    }

    public function createResponse(ResponseInterface $response): Schema\CustomProperty
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CustomProperty::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CustomProperty::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
