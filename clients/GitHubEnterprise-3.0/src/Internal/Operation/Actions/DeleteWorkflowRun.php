<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteWorkflowRun
{
    public const OPERATION_ID    = 'actions/delete-workflow-run';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}';
    /**The id of the workflow run. **/
    private int $runId;

    public function __construct(private string $owner, private string $repo, int $runId)
    {
        $this->runId = $runId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->runId], '/repos/{owner}/{repo}/actions/runs/{run_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
