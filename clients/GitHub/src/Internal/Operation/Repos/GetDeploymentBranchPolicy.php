<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetDeploymentBranchPolicy
{
    public const OPERATION_ID    = 'repos/get-deployment-branch-policy';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The unique identifier of the branch policy. **/
    private int $branchPolicyId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private BranchPolicyId $hydrator, string $owner, string $repo, string $environmentName, int $branchPolicyId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->environmentName         = $environmentName;
        $this->branchPolicyId          = $branchPolicyId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}'))->expand(['branch_policy_id' => $this->branchPolicyId, 'environment_name' => $this->environmentName, 'owner' => $this->owner, 'repo' => $this->repo]));
    }

    public function createResponse(ResponseInterface $response): DeploymentBranchPolicy
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(DeploymentBranchPolicy::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(DeploymentBranchPolicy::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
