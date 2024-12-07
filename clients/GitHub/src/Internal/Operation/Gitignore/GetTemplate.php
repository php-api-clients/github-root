<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Gitignore;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Gitignore\Templates\Name;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
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

final class GetTemplate
{
    public const OPERATION_ID    = 'gitignore/get-template';
    public const OPERATION_MATCH = 'GET /gitignore/templates/{name}';

    public function __construct(private SchemaValidator $responseSchemaValidator, private Name $hydrator, private string $name)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/gitignore/templates/{name}'))->expand(['name' => $this->name]));
    }

    public function createResponse(ResponseInterface $response): GitignoreTemplate|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(GitignoreTemplate::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(GitignoreTemplate::class, $body);
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
