<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Gists;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetComment
{
    public const OPERATION_ID    = 'gists/get-comment';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/comments/{comment_id}';
    /**gist_id parameter **/
    private string $gistId;
    /**comment_id parameter **/
    private int $commentId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator, string $gistId, int $commentId)
    {
        $this->gistId    = $gistId;
        $this->commentId = $commentId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{gist_id}', '{comment_id}'], [$this->gistId, $this->commentId], '/gists/{gist_id}/comments/{comment_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\GistComment|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GistComment::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GistComment::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden Gist
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\Gists\Get\Response\ApplicationJson\Forbidden(403, $this->hydrator->hydrateObject(Schema\Operations\Gists\Get\Response\ApplicationJson\Forbidden::class, $body));
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
