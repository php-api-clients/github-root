<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Gists;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class GetComment
{
    public const OPERATION_ID    = 'gists/get-comment';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/comments/{comment_id}';
    /**The unique identifier of the gist. **/
    private string $gistId;
    /**The unique identifier of the comment. **/
    private int $commentId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private CommentId $hydrator, string $gistId, int $commentId)
    {
        $this->gistId                  = $gistId;
        $this->commentId               = $commentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/gists/{gist_id}/comments/{comment_id}'))->expand(['comment_id' => $this->commentId, 'gist_id' => $this->gistId]));
    }

    public function createResponse(ResponseInterface $response): GistComment|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(GistComment::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(GistComment::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Forbidden Gist
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Forbidden::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\Gists\Get\Response\ApplicationJson\Forbidden(403, $this->hydrator->hydrateObject(Forbidden::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
