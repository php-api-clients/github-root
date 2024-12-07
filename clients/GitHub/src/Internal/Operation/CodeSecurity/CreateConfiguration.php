<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeSecurity;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations;
use ApiClients\Client\GitHub\Schema\CodeSecurity\CreateConfiguration\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
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
use function json_encode;

final class CreateConfiguration
{
    public const OPERATION_ID    = 'code-security/create-configuration';
    public const OPERATION_MATCH = 'POST /orgs/{org}/code-security/configurations';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Configurations $hydrator, string $org)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/orgs/{org}/code-security/configurations'))->expand(['org' => $this->org]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): CodeSecurityConfiguration
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Successfully created code security configuration
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodeSecurityConfiguration::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CodeSecurityConfiguration::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
