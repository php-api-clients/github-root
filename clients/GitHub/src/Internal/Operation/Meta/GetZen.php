<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Meta;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Zen;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetZen
{
    public const OPERATION_ID    = 'meta/get-zen';
    public const OPERATION_MATCH = 'GET /zen';

    public function __construct(private SchemaValidator $responseSchemaValidator, private Zen $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/zen'))->expand([]));
    }

    public function createResponse(ResponseInterface $response): string
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    case 200:
                        return $body;
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
