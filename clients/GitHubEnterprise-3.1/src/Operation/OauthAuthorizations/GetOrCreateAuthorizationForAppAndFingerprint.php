<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\OauthAuthorizations;

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
use function json_encode;
use function str_replace;

final class GetOrCreateAuthorizationForAppAndFingerprint
{
    public const OPERATION_ID    = 'oauth-authorizations/get-or-create-authorization-for-app-and-fingerprint';
    public const OPERATION_MATCH = 'PUT /authorizations/clients/{client_id}/{fingerprint}';
    private const METHOD         = 'PUT';
    private const PATH           = '/authorizations/clients/{client_id}/{fingerprint}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The client ID of the GitHub app.**/
    private string $clientId;
    private string $fingerprint;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb $hydrator, string $clientId, string $fingerprint)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->clientId                = $clientId;
        $this->fingerprint             = $fingerprint;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{client_id}', '{fingerprint}'], [$this->clientId, $this->fingerprint], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Authorization
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * if returning an existing token
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Authorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Authorization::class, $body);
                    /**
                     * Response if returning a new token
                    **/

                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Authorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Authorization::class, $body);
                    /**
                     * Validation failed
                    **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
