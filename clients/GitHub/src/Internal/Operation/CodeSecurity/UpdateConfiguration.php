<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeSecurity;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId;
use ApiClients\Client\GitHub\Schema\CodeSecurity\UpdateConfiguration\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class UpdateConfiguration
{
    public const OPERATION_ID    = 'code-security/update-configuration';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/code-security/configurations/{configuration_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the code security configuration. **/
    private int $configurationId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private ConfigurationId $hydrator, string $org, int $configurationId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->configurationId         = $configurationId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PATCH', (string) (new UriTemplate('/orgs/{org}/code-security/configurations/{configuration_id}'))->expand(['configuration_id' => $this->configurationId, 'org' => $this->org]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): CodeSecurityConfiguration|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when a configuration is updated
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodeSecurityConfiguration::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CodeSecurityConfiguration::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response when no new updates are made
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
