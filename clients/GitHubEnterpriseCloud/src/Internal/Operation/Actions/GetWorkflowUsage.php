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

final class GetWorkflowUsage
{
    public const OPERATION_ID    = 'actions/get-workflow-usage';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string. **/
    private $workflowId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing $hydrator, string $owner, string $repo, $workflowId)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->workflowId = $workflowId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{workflow_id}'], [$this->owner, $this->repo, $this->workflowId], '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing'));
    }

    public function createResponse(ResponseInterface $response): Schema\WorkflowUsage
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WorkflowUsage::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WorkflowUsage::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
