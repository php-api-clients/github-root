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

final class SetManageMaintenance
{
    public const OPERATION_ID    = 'enterprise-admin/set-manage-maintenance';
    public const OPERATION_MATCH = 'POST /manage/v1/maintenance';
    private const METHOD         = 'POST';
    private const PATH           = '/manage/v1/maintenance';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\GhesSetMaintenanceRequest::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Bad request
             **/
            case 400:
                return ['code' => 400];
            /**
             * Unauthorized
             **/

            case 401:
                return ['code' => 401];
            /**
             * Internal error
             **/

            case 500:
                return ['code' => 500];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
