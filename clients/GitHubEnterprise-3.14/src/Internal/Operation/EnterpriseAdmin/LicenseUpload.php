<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class LicenseUpload
{
    public const OPERATION_ID    = 'enterprise-admin/license-upload';
    public const OPERATION_MATCH = 'PUT /manage/v1/config/license';
    /**Whether to instantly apply changes from the license. Otherwise the new license can be applied using the [`/manage/v1/config/apply`](https://docs.github.com/enterprise-server@3.14/rest/enterprise-admin/manage-ghes#start-configuration-apply-process) endpoint. **/
    private bool $apply;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, bool $apply)
    {
        $this->apply = $apply;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\GhesUploadLicenseRequest::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{apply}'], [$this->apply], '/manage/v1/config/license' . '?apply={apply}'), ['Content-Type' => 'multipart/form-data'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Created
             **/
            case 201:
                return new WithoutBody(201, []);
            /**
             * Accepted
             **/

            case 202:
                return new WithoutBody(202, []);
            /**
             * Unauthorized
             **/

            case 401:
                return new WithoutBody(401, []);
            /**
             * Internal error
             **/

            case 500:
                return new WithoutBody(500, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
