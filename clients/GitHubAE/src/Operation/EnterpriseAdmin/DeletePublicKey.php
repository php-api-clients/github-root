<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePublicKey
{
    public const OPERATION_ID    = 'enterprise-admin/delete-public-key';
    public const OPERATION_MATCH = 'DELETE /admin/keys/{key_ids}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/keys/{key_ids}';
    /**The unique identifier of the key.**/
    private string $keyIds;

    public function __construct(string $keyIds)
    {
        $this->keyIds = $keyIds;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{key_ids}'], [$this->keyIds], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
