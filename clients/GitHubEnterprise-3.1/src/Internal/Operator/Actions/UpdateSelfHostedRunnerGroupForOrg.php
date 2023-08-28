<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateSelfHostedRunnerGroupForOrg
{
    public const OPERATION_ID    = 'actions/update-self-hosted-runner-group-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId $hydrator)
    {
    }

    /** @return Schema\RunnerGroupsOrg */
    public function call(string $org, int $runnerGroupId, array $params): RunnerGroupsOrg|array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $runnerGroupId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsOrg|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
