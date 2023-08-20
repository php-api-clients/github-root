<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Orgs;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteCustomRole
{
    public const OPERATION_ID    = 'orgs/delete-custom-role';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/custom_roles/{role_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/custom_roles/{role_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, int $roleId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs\DeleteCustomRole($org, $roleId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
