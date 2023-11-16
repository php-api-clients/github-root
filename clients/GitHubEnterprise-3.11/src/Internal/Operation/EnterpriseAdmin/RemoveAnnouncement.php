<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveAnnouncement
{
    public const OPERATION_ID    = 'enterprise-admin/remove-announcement';
    public const OPERATION_MATCH = 'DELETE /enterprise/announcement';

    public function __construct()
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace([], [], '/enterprise/announcement'));
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
