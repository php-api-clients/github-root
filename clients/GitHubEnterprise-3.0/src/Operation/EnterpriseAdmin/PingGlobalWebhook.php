<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class PingGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/ping-global-webhook';
    public const OPERATION_MATCH = 'POST /admin/hooks/{hook_id}/pings';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/hooks/{hook_id}/pings';
    private int $hookId;
    /**This API is under preview and subject to change. **/
    private string $accept;

    public function __construct(int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->hookId = $hookId;
        $this->accept = $accept;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{hook_id}'], [$this->hookId], self::PATH));
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
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
