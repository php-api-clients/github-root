<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Markdown;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Markdown\Raw;
use ApiClients\Client\GitHub\Schema\Markdown\RenderRaw\Request\TextPlain;
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
use function json_encode;

final class RenderRaw
{
    public const OPERATION_ID    = 'markdown/render-raw';
    public const OPERATION_MATCH = 'POST /markdown/raw';

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Raw $hydrator)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(TextPlain::SCHEMA_JSON, Schema::class));

        return new Request('POST', (string) (new UriTemplate('/markdown/raw'))->expand([]), ['Content-Type' => 'text/plain'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): string|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'text/html':
                $body = $response->getBody()->getContents();
                switch ($code) {
                    case 200:
                        return $body;
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
