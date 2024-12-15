<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

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

final class GetManageConfigApplyEvents
{
    public const OPERATION_ID    = 'enterprise-admin/get-manage-config-apply-events';
    public const OPERATION_MATCH = 'GET /manage/v1/config/apply/events';
    /**The unique ID of the last response from a host, used for pagination. **/
    private string $lastRequestId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Config\Apply\Events $hydrator, string $lastRequestId)
    {
        $this->lastRequestId = $lastRequestId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{last_request_id}'], [$this->lastRequestId], '/manage/v1/config/apply/events' . '?last_request_id={last_request_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson\Ok|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\GetManageConfigApplyEvents\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Bad request
             **/
            case 400:
                return new WithoutBody(400, []);
            /**
             * Unauthorized
             **/

            case 401:
                return new WithoutBody(401, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
