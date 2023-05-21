<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSelfHostedRunnerGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/get-self-hosted-runner-group-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups\RunnerGroupId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RunnerGroupsEnterprise>
     **/
    public function call(string $enterprise, int $runnerGroupId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $runnerGroupId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsEnterprise {
            return $operation->createResponse($response);
        });
    }
}
