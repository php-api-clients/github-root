<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListDeploymentBranchPolicies
{
    public const OPERATION_ID    = 'repos/list-deployment-branch-policies';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of the environment. The name must be URL encoded. For example, any slashes in the name must be replaced with `%2F`. **/
    private string $environmentName;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.10/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.10/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies $hydrator, string $owner, string $repo, string $environmentName, int $perPage = 30, int $page = 1)
    {
        $this->owner           = $owner;
        $this->repo            = $repo;
        $this->environmentName = $environmentName;
        $this->perPage         = $perPage;
        $this->page            = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{environment_name}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->environmentName, $this->perPage, $this->page], '/repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies' . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
