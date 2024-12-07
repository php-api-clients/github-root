<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Reactions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\Reactions\CreateForIssueComment\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\ValidationError;
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
use function json_encode;

final class CreateForIssueComment
{
    public const OPERATION_ID    = 'reactions/create-for-issue-comment';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The unique identifier of the comment. **/
    private int $commentId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Reactions $hydrator, string $owner, string $repo, int $commentId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->commentId               = $commentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions'))->expand(['comment_id' => $this->commentId, 'owner' => $this->owner, 'repo' => $this->repo]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Reaction
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Reaction exists
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Reaction::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Reaction::class, $body);
                    /**
                     * Reaction created
                     **/

                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Reaction::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(Reaction::class, $body);
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\ValidationError(422, $this->hydrator->hydrateObject(ValidationError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
