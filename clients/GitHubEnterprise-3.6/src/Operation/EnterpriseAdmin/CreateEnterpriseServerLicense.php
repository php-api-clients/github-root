<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Schema;
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
    private const METHOD         = 'POST';
    private const PATH           = '/setup/api/start';
    private readonly SchemaValidator $requestSchemaValidator;

    public function __construct(SchemaValidator $requestSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\CreateEnterpriseServerLicense\Request\MultipartFormData::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'multipart/form-data'], json_encode($data));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 202:
                return ['code' => 202];
            /**
             * Unauthorized
             **/

            case 401:
                return ['code' => 401];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
