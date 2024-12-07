<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Apps;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Users\Username\Installation;
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

final class GetUserInstallation
{
    public const OPERATION_ID    = 'apps/get-user-installation';
    public const OPERATION_MATCH = 'GET /users/{username}/installation';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Installation $hydrator, string $username)
    {
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/users/{username}/installation'))->expand(['username' => $this->username]));
    }

    public function createResponse(ResponseInterface $response): \ApiClients\Client\GitHub\Schema\Installation
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(\ApiClients\Client\GitHub\Schema\Installation::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(\ApiClients\Client\GitHub\Schema\Installation::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
