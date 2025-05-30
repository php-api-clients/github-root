<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
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

final class StartPreReceiveEnvironmentDownload
{
    public const OPERATION_ID    = 'enterprise-admin/start-pre-receive-environment-download';
    public const OPERATION_MATCH = 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Admin\PreReceiveEnvironments\PreReceiveEnvironmentId\Downloads $hydrator, private int $preReceiveEnvironmentId)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('POST', str_replace(['{pre_receive_environment_id}'], [$this->preReceiveEnvironmentId], '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads'));
    }

    public function createResponse(ResponseInterface $response): Schema\PreReceiveEnvironmentDownloadStatus
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
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironmentDownloadStatus::class, $body);
                    /**
                     * Client Errors
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\ApplicationJson\UnprocessableEntity\Application\Json::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\ApplicationJson\UnprocessableEntity\Application\Json(422, $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\ApplicationJson\UnprocessableEntity\Application\Json::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
