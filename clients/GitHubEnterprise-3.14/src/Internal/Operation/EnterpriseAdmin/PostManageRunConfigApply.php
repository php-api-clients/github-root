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
use function json_encode;
use function str_replace;

final class PostManageRunConfigApply
{
    public const OPERATION_ID    = 'enterprise-admin/post-manage-run-config-apply';
    public const OPERATION_MATCH = 'POST /manage/v1/config/apply';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Config\Apply $hydrator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\PostManageRunConfigApply\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace([], [], '/manage/v1/config/apply'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok::class, $body);
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
