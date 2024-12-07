<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId;
use ApiClients\Client\GitHub\Schema\Runner;
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

final class GetSelfHostedRunnerForRepo
{
    public const OPERATION_ID    = 'actions/get-self-hosted-runner-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**Unique identifier of the self-hosted runner. **/
    private int $runnerId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RunnerId $hydrator, string $owner, string $repo, int $runnerId)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->runnerId                = $runnerId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/repos/{owner}/{repo}/actions/runners/{runner_id}'))->expand(['owner' => $this->owner, 'repo' => $this->repo, 'runner_id' => $this->runnerId]));
    }

    public function createResponse(ResponseInterface $response): Runner
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Runner::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Runner::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
