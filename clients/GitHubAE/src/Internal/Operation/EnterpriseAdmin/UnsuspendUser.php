<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class UnsuspendUser
{
    public const OPERATION_ID    = 'enterprise-admin/unsuspend-user';
    public const OPERATION_MATCH = 'DELETE /users/{username}/suspended';
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $username)
    {
        $this->username = $username;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\UnsuspendUser\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('DELETE', str_replace(['{username}'], [$this->username], '/users/{username}/suspended'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
