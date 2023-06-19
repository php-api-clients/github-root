<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteGlobalWebhook
{
    public const OPERATION_ID    = 'enterprise-admin/delete-global-webhook';
    public const OPERATION_MATCH = 'DELETE /admin/hooks/{hook_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/hooks/{hook_id}';
    /**This API is under preview and subject to change. **/
    private string $accept;

    public function __construct(private int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->accept = $accept;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{hook_id}'], [$this->hookId], self::PATH));
    }

    /** @return array{code: int} */
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
