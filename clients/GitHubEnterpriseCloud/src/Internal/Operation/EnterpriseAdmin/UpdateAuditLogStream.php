<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

final class UpdateAuditLogStream
{
    public const OPERATION_ID    = 'enterprise-admin/update-audit-log-stream';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/audit-log/streams/{stream_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The ID of the audit log stream configuration. **/
    private int $streamId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\AuditLog\Streams\StreamId $hydrator, string $enterprise, int $streamId)
    {
        $this->enterprise = $enterprise;
        $this->streamId   = $streamId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\UpdateAuditLogStream\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{enterprise}', '{stream_id}'], [$this->enterprise, $this->streamId], '/enterprises/{enterprise}/audit-log/streams/{stream_id}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\GetAuditLogStreamConfig
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Successful update
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GetAuditLogStreamConfig::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GetAuditLogStreamConfig::class, $body);
                    /**
                     * Validation error
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity(422, $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
