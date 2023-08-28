<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Internal;
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

final class EnableOrDisableMaintenanceMode
{
    public const OPERATION_ID    = 'enterprise-admin/enable-or-disable-maintenance-mode';
    public const OPERATION_MATCH = 'POST /setup/api/maintenance';
    private const METHOD         = 'POST';
    private const PATH           = '/setup/api/maintenance';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Setup\Api\Maintenance $hydrator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\EnableOrDisableMaintenanceMode\Request\ApplicationXWwwFormUrlencoded::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace([], [], self::PATH), ['Content-Type' => 'application/x-www-form-urlencoded'], json_encode($data));
    }

    /** @return Schema\MaintenanceStatus|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\MaintenanceStatus|array
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\MaintenanceStatus::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\MaintenanceStatus::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Unauthorized
             **/
            case 401:
                return ['code' => 401];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
