<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class ReRunWorkflow
{
    public const OPERATION_ID    = 'actions/re-run-workflow';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the workflow run. **/
    private int $runId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun $hydrator, string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->runId = $runId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\ReRunWorkflow\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->runId], '/repos/{owner}/{repo}/actions/runs/{run_id}/rerun'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Actions\ReRunWorkflow\Response\ApplicationJson\Created\Application\Json
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
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Actions\ReRunWorkflow\Response\ApplicationJson\Created\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Actions\ReRunWorkflow\Response\ApplicationJson\Created\Application\Json::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
