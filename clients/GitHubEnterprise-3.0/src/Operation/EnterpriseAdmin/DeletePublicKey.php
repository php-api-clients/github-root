<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeletePublicKey
{
    public const OPERATION_ID    = 'enterprise-admin/delete-public-key';
    public const OPERATION_MATCH = 'DELETE /admin/keys/{key_ids}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/admin/keys/{key_ids}';

    public function __construct(private string $keyIds)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{key_ids}'], [$this->keyIds], self::PATH));
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
