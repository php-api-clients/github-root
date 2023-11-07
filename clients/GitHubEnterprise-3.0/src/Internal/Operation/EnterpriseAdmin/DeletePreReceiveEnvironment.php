<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

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

final class DeletePreReceiveEnvironment
{
    public const OPERATION_ID    = 'enterprise-admin/delete-pre-receive-environment';
    public const OPERATION_MATCH = 'DELETE /admin/pre-receive-environments/{pre_receive_environment_id}';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId $hydrator, private int $preReceiveEnvironmentId)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{pre_receive_environment_id}'], [$this->preReceiveEnvironmentId], '/admin/pre-receive-environments/{pre_receive_environment_id}'));
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
                     * Client Errors
                     **/
                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity(422, $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\ApplicationJson\UnprocessableEntity::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
