<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\Header;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DownloadWorkflowRunAttemptLogs
{
    public const OPERATION_ID    = 'actions/download-workflow-run-attempt-logs';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;
    /**The attempt number of the workflow run. **/
    private int $attemptNumber;

    public function __construct(string $owner, string $repo, int $runId, int $attemptNumber)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->runId         = $runId;
        $this->attemptNumber = $attemptNumber;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{run_id}', '{attempt_number}'], [$this->owner, $this->repo, $this->runId, $this->attemptNumber], '/repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 302:
                return new WithoutBody(302, [new Header('location', $response->getHeaderLine('Location'))]);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
