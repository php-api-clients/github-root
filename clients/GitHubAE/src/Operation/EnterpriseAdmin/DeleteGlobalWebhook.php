<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/delete-global-webhook';
    public const OPERATION_MATCH = 'DELETE /admin/hooks/{hook_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/hooks/{hook_id}';
    /**The unique identifier of the hook.**/
    private int $hookId;

    public function __construct(int $hookId)
    {
        $this->hookId = $hookId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{hook_id}'], [$this->hookId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
