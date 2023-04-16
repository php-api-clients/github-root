<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveAnnouncement
{
    public const OPERATION_ID    = 'enterprise-admin/remove-announcement';
    public const OPERATION_MATCH = 'DELETE /enterprise/announcement';
    private const METHOD         = 'DELETE';
    private const PATH           = '/enterprise/announcement';

    public function __construct()
    {
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
