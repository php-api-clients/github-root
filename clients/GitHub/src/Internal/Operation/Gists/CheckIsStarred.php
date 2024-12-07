<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Gists;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gists\GistId\Star;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound;
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

final class CheckIsStarred
{
    public const OPERATION_ID    = 'gists/check-is-starred';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/star';
    /**The unique identifier of the gist. **/
    private string $gistId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private Star $hydrator, string $gistId)
    {
        $this->gistId                  = $gistId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/gists/{gist_id}/star'))->expand(['gist_id' => $this->gistId]));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Not Found if gist is not starred
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(NotFound::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\Operations\Gists\CheckIsStarred\Response\ApplicationJson\NotFound(404, $this->hydrator->hydrateObject(NotFound::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(403, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response if gist is starred
             **/
            case 204:
                return new WithoutBody(204, []);
            /**
             * Not modified
             **/

            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
