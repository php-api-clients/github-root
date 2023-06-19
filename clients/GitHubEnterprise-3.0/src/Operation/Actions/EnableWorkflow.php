<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class EnableWorkflow
{
    public const OPERATION_ID    = 'actions/enable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable';
    private const METHOD         = 'PUT';
    private const PATH           = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable';
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private $workflowId;

    public function __construct(private string $owner, private string $repo, $workflowId)
    {
        $this->workflowId = $workflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{workflow_id}'], [$this->owner, $this->repo, $this->workflowId], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
