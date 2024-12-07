<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicyNamePatternWithType;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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
use function json_encode;

final class CreateDeploymentBranchPolicy
{
    public const OPERATION_ID    = 'repos/create-deployment-branch-policy';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private DeploymentBranchPolicies $hydrator, string $owner, string $repo, string $environmentName)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->environmentName         = $environmentName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(DeploymentBranchPolicyNamePatternWithType::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies'))->expand(['environment_name' => $this->environmentName, 'owner' => $this->owner, 'repo' => $this->repo]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): DeploymentBranchPolicy|WithoutBody
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

        switch ($code) {
            /**
             * Not Found or `deployment_branch_policy.custom_branch_policies` property for the environment is set to false
             **/
            case 404:
                return new WithoutBody(404, []);
            /**
             * Response if the same branch name pattern already exists
             **/

            case 303:
                return new WithoutBody(303, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
