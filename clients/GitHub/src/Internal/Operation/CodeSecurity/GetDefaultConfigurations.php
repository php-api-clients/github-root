<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeSecurity;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\Defaults;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodeSecurityDefaultConfigurations;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;

final class GetDefaultConfigurations
{
    public const OPERATION_ID    = 'code-security/get-default-configurations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/code-security/configurations/defaults';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Defaults $hydrator, string $org)
    {
        $this->org                     = $org;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/code-security/configurations/defaults'))->expand(['org' => $this->org]));
    }

    /** @return Observable<CodeSecurityDefaultConfigurations>|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|WithoutBody
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): CodeSecurityDefaultConfigurations {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodeSecurityDefaultConfigurations::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(CodeSecurityDefaultConfigurations::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
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

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
