<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class UnsuspendUser
{
    public const OPERATION_ID    = 'enterprise-admin/unsuspend-user';
    public const OPERATION_MATCH = 'DELETE /users/{username}/suspended';
    private const METHOD         = 'DELETE';
    private const PATH           = '/users/{username}/suspended';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(SchemaValidator $requestSchemaValidator, string $username)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->username               = $username;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\UnsuspendUser\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{username}'], [$this->username], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
