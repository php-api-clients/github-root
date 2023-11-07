<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeletePreReceiveHook
{
    public const OPERATION_ID    = 'enterprise-admin/delete-pre-receive-hook';
    public const OPERATION_MATCH = 'DELETE /admin/pre-receive-hooks/{pre_receive_hook_id}';
    /**The unique identifier of the pre-receive hook. **/
    private int $preReceiveHookId;

    public function __construct(int $preReceiveHookId)
    {
        $this->preReceiveHookId = $preReceiveHookId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{pre_receive_hook_id}'], [$this->preReceiveHookId], '/admin/pre-receive-hooks/{pre_receive_hook_id}'));
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
