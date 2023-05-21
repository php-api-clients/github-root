<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Apps;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class RevokeGrantForApplication
{
    public const OPERATION_ID    = 'apps/revoke-grant-for-application';
    public const OPERATION_MATCH = 'DELETE /applications/{client_id}/grants/{access_token}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/applications/{client_id}/grants/{access_token}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $clientId, string $accessToken): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Apps\RevokeGrantForApplication($clientId, $accessToken);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
