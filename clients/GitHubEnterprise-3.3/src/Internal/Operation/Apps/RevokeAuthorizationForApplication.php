<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RevokeAuthorizationForApplication
{
    public const OPERATION_ID    = 'apps/revoke-authorization-for-application';
    public const OPERATION_MATCH = 'DELETE /applications/{client_id}/tokens/{access_token}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/applications/{client_id}/tokens/{access_token}';
    /**The client ID of the GitHub app. **/
    private string $clientId;

    public function __construct(string $clientId, private string $accessToken)
    {
        $this->clientId = $clientId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{client_id}', '{access_token}'], [$this->clientId, $this->accessToken], self::PATH));
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
