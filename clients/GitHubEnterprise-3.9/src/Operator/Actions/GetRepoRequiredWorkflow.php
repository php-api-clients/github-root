<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema\RepoRequiredWorkflow;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetRepoRequiredWorkflow
{
    public const OPERATION_ID    = 'actions/get-repo-required-workflow';
    public const OPERATION_MATCH = 'GET /repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo $hydrator)
    {
    }

    /** @return PromiseInterface<RepoRequiredWorkflow> **/
    public function call(string $org, string $repo, int $requiredWorkflowIdForRepo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\GetRepoRequiredWorkflow($this->responseSchemaValidator, $this->hydrator, $org, $repo, $requiredWorkflowIdForRepo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RepoRequiredWorkflow {
            return $operation->createResponse($response);
        });
    }
}
