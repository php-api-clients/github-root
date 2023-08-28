<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\EnterpriseAdmin;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class AddOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/add-org-access-to-self-hosted-runner-group-in-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code:int} */
    public function call(string $enterprise, int $runnerGroupId, int $orgId): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runnerGroupId, $orgId);
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
