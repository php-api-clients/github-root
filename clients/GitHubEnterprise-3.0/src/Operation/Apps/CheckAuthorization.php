<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Apps;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class CheckAuthorization
{
    public const OPERATION_ID    = 'apps/check-authorization';
    public const OPERATION_MATCH = 'GET /applications/{client_id}/tokens/{access_token}';
    private const METHOD         = 'GET';
    private const PATH           = '/applications/{client_id}/tokens/{access_token}';
    /**The client ID of your GitHub app.**/
    private string $clientId;
    private string $accessToken;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $hydrator, string $clientId, string $accessToken)
    {
        $this->clientId                = $clientId;
        $this->accessToken             = $accessToken;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{client_id}', '{access_token}'], [$this->clientId, $this->accessToken], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\Apps\CheckAuthorization\Response\Applicationjson\H200
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Apps\CheckAuthorization\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Apps\CheckAuthorization\Response\Applicationjson\H200::class, $body);
                    /**
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
