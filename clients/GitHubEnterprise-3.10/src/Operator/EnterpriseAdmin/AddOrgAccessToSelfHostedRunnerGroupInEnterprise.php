<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\EnterpriseAdmin;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class AddOrgAccessToSelfHostedRunnerGroupInEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/add-org-access-to-self-hosted-runner-group-in-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $enterprise, int $runnerGroupId, int $orgId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runnerGroupId, $orgId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
