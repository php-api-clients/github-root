<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class CreateEnterpriseServerLicense
{
    public const OPERATION_ID    = 'enterprise-admin/create-enterprise-server-license';
    public const OPERATION_MATCH = 'POST /setup/api/start';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\CreateEnterpriseServerLicense\Request\MultipartFormData::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace([], [], '/setup/api/start'), ['Content-Type' => 'multipart/form-data'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 202:
                return new WithoutBody(202, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
