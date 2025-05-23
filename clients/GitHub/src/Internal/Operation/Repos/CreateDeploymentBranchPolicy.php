<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

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

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies $hydrator, string $owner, string $repo, string $environmentName)
    {
        $this->owner           = $owner;
        $this->repo            = $repo;
        $this->environmentName = $environmentName;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\DeploymentBranchPolicyNamePatternWithType::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{owner}', '{repo}', '{environment_name}'], [$this->owner, $this->repo, $this->environmentName], '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\DeploymentBranchPolicy|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DeploymentBranchPolicy::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\DeploymentBranchPolicy::class, $body);
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
