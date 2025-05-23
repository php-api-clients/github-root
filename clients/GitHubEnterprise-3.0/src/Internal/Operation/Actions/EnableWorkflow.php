<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class EnableWorkflow
{
    public const OPERATION_ID    = 'actions/enable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable';
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private $workflowId;

    public function __construct(private string $owner, private string $repo, $workflowId)
    {
        $this->workflowId = $workflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', str_replace(['{owner}', '{repo}', '{workflow_id}'], [$this->owner, $this->repo, $this->workflowId], '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable'));
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
