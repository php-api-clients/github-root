<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class RemoveAuthorizedSshKey
{
    public const OPERATION_ID    = 'enterprise-admin/remove-authorized-ssh-key';
    public const OPERATION_MATCH = 'DELETE /setup/api/settings/authorized-keys';
    private const METHOD         = 'DELETE';
    private const PATH           = '/setup/api/settings/authorized-keys';
    private readonly SchemaValidator $requestSchemaValidator;

    public function __construct(SchemaValidator $requestSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\AddAuthorizedSshKey\Request\ApplicationXWwwFormUrlencoded::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'application/x-www-form-urlencoded'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
