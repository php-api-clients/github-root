<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdateSelfHostedRunnerGroupForOrg
{
    public const OPERATION_ID    = 'actions/update-self-hosted-runner-group-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId $hydrator)
    {
    }

    /** @return PromiseInterface<RunnerGroupsOrg> **/
    public function call(string $org, int $runnerGroupId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $runnerGroupId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsOrg {
            return $operation->createResponse($response);
        });
    }
}
