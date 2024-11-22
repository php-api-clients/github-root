<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteAuditLogStream
{
    public const OPERATION_ID    = 'enterprise-admin/delete-audit-log-stream';
    public const OPERATION_MATCH = 'DELETE /enterprises/{enterprise}/audit-log/streams/{stream_id}';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**The ID of the audit log stream configuration. **/
    private int $streamId;

    public function __construct(string $enterprise, int $streamId)
    {
        $this->enterprise = $enterprise;
        $this->streamId   = $streamId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{enterprise}', '{stream_id}'], [$this->enterprise, $this->streamId], '/enterprises/{enterprise}/audit-log/streams/{stream_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * The audit log stream configuration was deleted successfully.
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
