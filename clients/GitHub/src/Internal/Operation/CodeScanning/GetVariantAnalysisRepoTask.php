<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeScanning;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\VariantAnalyses\CodeqlVariantAnalysisId\Repos\RepoOwner\RepoName;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
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

final class GetVariantAnalysisRepoTask
{
    public const OPERATION_ID    = 'code-scanning/get-variant-analysis-repo-task';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the controller repository. **/
    private string $repo;
    /**The ID of the variant analysis. **/
    private int $codeqlVariantAnalysisId;
    /**The account owner of the variant analysis repository. The name is not case sensitive. **/
    private string $repoOwner;
    /**The name of the variant analysis repository. **/
    private string $repoName;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RepoName $hydrator, string $owner, string $repo, int $codeqlVariantAnalysisId, string $repoOwner, string $repoName)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->codeqlVariantAnalysisId = $codeqlVariantAnalysisId;
        $this->repoOwner               = $repoOwner;
        $this->repoName                = $repoName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}'))->expand(['codeql_variant_analysis_id' => $this->codeqlVariantAnalysisId, 'owner' => $this->owner, 'repo' => $this->repo, 'repo_name' => $this->repoName, 'repo_owner' => $this->repoOwner]));
    }

    public function createResponse(ResponseInterface $response): CodeScanningVariantAnalysisRepoTask
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodeScanningVariantAnalysisRepoTask::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CodeScanningVariantAnalysisRepoTask::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ServiceUnavailable::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(ServiceUnavailable::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
