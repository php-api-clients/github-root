<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId;
use ApiClients\Client\GitHub\Schema\Workflow;
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

final class GetWorkflow
{
    public const OPERATION_ID    = 'actions/get-workflow';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private int|string $workflowId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private WorkflowId $hydrator, string $owner, string $repo, int|string $workflowId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->workflowId              = $workflowId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/workflows/{workflow_id}'))->expand(['owner' => $this->owner, 'repo' => $this->repo, 'workflow_id' => $this->workflowId]));
    }

    public function createResponse(ResponseInterface $response): Workflow
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Workflow::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Workflow::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
