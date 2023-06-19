<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeletePreReceiveHook
{
    public const OPERATION_ID    = 'enterprise-admin/delete-pre-receive-hook';
    public const OPERATION_MATCH = 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/pre-receive-hooks/{pre_receive_hook_id}';
    /**pre_receive_hook_id parameter **/
    private int $preReceiveHookId;

    public function __construct(int $preReceiveHookId)
    {
        $this->preReceiveHookId = $preReceiveHookId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{pre_receive_hook_id}'], [$this->preReceiveHookId], self::PATH));
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
