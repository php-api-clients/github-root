<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

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
use function str_replace;

final class GetOneAuditLogStream
{
    public const OPERATION_ID    = 'enterprise-admin/get-one-audit-log-stream';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/audit-log/streams/{stream_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The ID of the audit log stream configuration. **/
    private int $streamId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\AuditLog\Streams\StreamId $hydrator, string $enterprise, int $streamId)
    {
        $this->enterprise = $enterprise;
        $this->streamId   = $streamId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{stream_id}'], [$this->enterprise, $this->streamId], '/enterprises/{enterprise}/audit-log/streams/{stream_id}'));
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
                     * Lists one audit log stream configuration via stream ID.
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GetAuditLogStreamConfig::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GetAuditLogStreamConfig::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
