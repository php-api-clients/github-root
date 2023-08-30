<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetSelfHostedRunnerGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/get-self-hosted-runner-group-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, int $runnerGroupId): RunnerGroupsEnterprise|array
    {
        $operation = new \ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $runnerGroupId);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsEnterprise|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
