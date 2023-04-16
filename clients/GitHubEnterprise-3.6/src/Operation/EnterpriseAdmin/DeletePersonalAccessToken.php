<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePersonalAccessToken
{
    public const OPERATION_ID    = 'enterprise-admin/delete-personal-access-token';
    public const OPERATION_MATCH = 'DELETE /admin/tokens/{token_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/tokens/{token_id}';
    /**The unique identifier of the token.**/
    private int $tokenId;

    public function __construct(int $tokenId)
    {
        $this->tokenId = $tokenId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{token_id}'], [$this->tokenId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
