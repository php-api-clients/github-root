<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class PingGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/ping-global-webhook';
    public const OPERATION_MATCH = 'POST /admin/hooks/{hook_id}/pings';
    /**The unique identifier of the hook. **/
    private int $hookId;

    public function __construct(int $hookId)
    {
        $this->hookId = $hookId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{hook_id}'], [$this->hookId], '/admin/hooks/{hook_id}/pings'));
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
