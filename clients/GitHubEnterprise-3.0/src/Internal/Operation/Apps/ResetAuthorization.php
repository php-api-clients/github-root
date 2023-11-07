<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Apps;

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
use function str_replace;

final class ResetAuthorization
{
    public const OPERATION_ID    = 'apps/reset-authorization';
    public const OPERATION_MATCH = 'POST /applications/{client_id}/tokens/{access_token}';
    /**The client ID of your GitHub app. **/
    private string $clientId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Applications\ClientId\Tokens\AccessToken $hydrator, string $clientId, private string $accessToken)
    {
        $this->clientId = $clientId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{client_id}', '{access_token}'], [$this->clientId, $this->accessToken], '/applications/{client_id}/tokens/{access_token}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Authorization
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Authorization::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Authorization::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
