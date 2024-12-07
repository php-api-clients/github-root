<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber;
use ApiClients\Client\GitHub\Schema\WorkflowRun;
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

    public function __construct(private SchemaValidator $responseSchemaValidator, private AttemptNumber $hydrator, string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests = false)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->runId                   = $runId;
        $this->attemptNumber           = $attemptNumber;
        $this->excludePullRequests     = $excludePullRequests;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}{?exclude_pull_requests}'))->expand(['attempt_number' => $this->attemptNumber, 'exclude_pull_requests' => $this->excludePullRequests, 'owner' => $this->owner, 'repo' => $this->repo, 'run_id' => $this->runId]));
    }

    public function createResponse(ResponseInterface $response): WorkflowRun
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(WorkflowRun::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(WorkflowRun::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
