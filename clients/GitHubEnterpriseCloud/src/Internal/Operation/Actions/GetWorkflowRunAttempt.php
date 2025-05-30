<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetWorkflowRunAttempt
{
    public const OPERATION_ID    = 'actions/get-workflow-run-attempt';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;
    /**The attempt number of the workflow run. **/
    private int $attemptNumber;
    /**If `true` pull requests are omitted from the response (empty array). **/
    private bool $excludePullRequests;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber $hydrator, string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests = false)
    {
        $this->owner               = $owner;
        $this->repo                = $repo;
        $this->runId               = $runId;
        $this->attemptNumber       = $attemptNumber;
        $this->excludePullRequests = $excludePullRequests;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{run_id}', '{attempt_number}', '{exclude_pull_requests}'], [$this->owner, $this->repo, $this->runId, $this->attemptNumber, $this->excludePullRequests], '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}' . '?exclude_pull_requests={exclude_pull_requests}'));
    }

    public function createResponse(ResponseInterface $response): Schema\WorkflowRun
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WorkflowRun::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WorkflowRun::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
