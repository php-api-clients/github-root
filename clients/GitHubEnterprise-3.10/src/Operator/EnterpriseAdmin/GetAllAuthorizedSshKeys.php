<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetAllAuthorizedSshKeys
{
    public const OPERATION_ID    = 'enterprise-admin/get-all-authorized-ssh-keys';
    public const OPERATION_MATCH = 'GET /setup/api/settings/authorized-keys';
    private const METHOD         = 'GET';
    private const PATH           = '/setup/api/settings/authorized-keys';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys();
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
