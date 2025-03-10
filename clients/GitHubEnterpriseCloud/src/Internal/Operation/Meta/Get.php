<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Meta;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

final class Get
{
    public const OPERATION_ID    = 'meta/get';
    public const OPERATION_MATCH = 'GET /meta';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Meta $hydrator)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace([], [], '/meta'));
    }

    public function createResponse(ResponseInterface $response): Schema\ApiOverview|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ApiOverview::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ApiOverview::class, $body);
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
