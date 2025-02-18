<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
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

final class CreateCommitComment
{
    public const OPERATION_ID    = 'repos/create-commit-comment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments';
    /**commit_sha parameter **/
    private string $commitSha;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments $hydrator, private string $owner, private string $repo, string $commitSha)
    {
        $this->commitSha = $commitSha;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Repos\CreateCommitComment\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{owner}', '{repo}', '{commit_sha}'], [$this->owner, $this->repo, $this->commitSha], '/repos/{owner}/{repo}/commits/{commit_sha}/comments'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\CommitComment
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CommitComment::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CommitComment::class, $body);
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
