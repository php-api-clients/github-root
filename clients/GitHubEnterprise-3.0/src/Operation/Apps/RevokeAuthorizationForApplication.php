<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RevokeAuthorizationForApplication
{
    public const OPERATION_ID    = 'apps/revoke-authorization-for-application';
    public const OPERATION_MATCH = 'DELETE /applications/{client_id}/tokens/{access_token}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/applications/{client_id}/tokens/{access_token}';
    /**The client ID of your GitHub app.**/
    private string $clientId;
    private string $accessToken;

    public function __construct(string $clientId, string $accessToken)
    {
        $this->clientId    = $clientId;
        $this->accessToken = $accessToken;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{client_id}', '{access_token}'], [$this->clientId, $this->accessToken], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
