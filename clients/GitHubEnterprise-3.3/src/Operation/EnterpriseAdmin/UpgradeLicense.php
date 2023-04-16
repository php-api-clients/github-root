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

final class UpgradeLicense
{
    public const OPERATION_ID    = 'enterprise-admin/upgrade-license';
    public const OPERATION_MATCH = 'POST /setup/api/upgrade';
    private const METHOD         = 'POST';
    private const PATH           = '/setup/api/upgrade';
    private readonly SchemaValidator $requestSchemaValidator;

    public function __construct(SchemaValidator $requestSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\UpgradeLicense\Request\MultipartformData::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'multipart/form-data'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
