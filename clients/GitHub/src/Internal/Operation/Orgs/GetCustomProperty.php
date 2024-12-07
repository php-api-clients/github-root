<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CustomProperty;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetCustomProperty
{
    public const OPERATION_ID    = 'orgs/get-custom-property';
    public const OPERATION_MATCH = 'GET /orgs/{org}/properties/schema/{custom_property_name}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The custom property name **/
    private string $customPropertyName;

    public function __construct(private SchemaValidator $responseSchemaValidator, private CustomPropertyName $hydrator, string $org, string $customPropertyName)
    {
        $this->org                     = $org;
        $this->customPropertyName      = $customPropertyName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/properties/schema/{custom_property_name}'))->expand(['custom_property_name' => $this->customPropertyName, 'org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): CustomProperty
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CustomProperty::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CustomProperty::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
