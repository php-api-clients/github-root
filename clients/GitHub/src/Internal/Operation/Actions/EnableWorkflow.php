<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

final class EnableWorkflow
{
    public const OPERATION_ID    = 'actions/enable-workflow';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private int|string $workflowId;

    public function __construct(string $owner, string $repo, int|string $workflowId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->workflowId = $workflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('PUT', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable'))->expand(['owner' => $this->owner, 'repo' => $this->repo, 'workflow_id' => $this->workflowId]));
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
