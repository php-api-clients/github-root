<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentBranchPolicy;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetDeploymentBranchPolicy
{
    public const OPERATION_ID    = 'repos/get-deployment-branch-policy';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $environmentName, int $branchPolicyId): DeploymentBranchPolicy
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos\GetDeploymentBranchPolicy($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $environmentName, $branchPolicyId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): DeploymentBranchPolicy {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
