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
    /**This API is under preview and subject to change. **/
    private string $accept;

    public function __construct(private int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->accept = $accept;
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
