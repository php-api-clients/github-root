<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

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

final class GetPreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/get-pre-receive-environment';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments/{pre_receive_environment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments/{pre_receive_environment_id}';
    /**The unique identifier of the pre-receive environment. **/
    private int $preReceiveEnvironmentId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId $hydrator, int $preReceiveEnvironmentId)
    {
        $this->preReceiveEnvironmentId = $preReceiveEnvironmentId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{pre_receive_environment_id}'], [$this->preReceiveEnvironmentId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\PreReceiveEnvironment
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PreReceiveEnvironment::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironment::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
