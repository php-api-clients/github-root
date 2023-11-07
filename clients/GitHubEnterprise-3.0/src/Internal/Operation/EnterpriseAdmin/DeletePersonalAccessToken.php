<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeletePersonalAccessToken
{
    public const OPERATION_ID    = 'enterprise-admin/delete-personal-access-token';
    public const OPERATION_MATCH = 'DELETE /admin/tokens/{token_id}';

    public function __construct(private int $tokenId)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{token_id}'], [$this->tokenId], '/admin/tokens/{token_id}'));
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
