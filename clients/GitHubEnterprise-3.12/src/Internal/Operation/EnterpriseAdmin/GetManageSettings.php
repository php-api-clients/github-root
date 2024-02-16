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

final class GetManageSettings
{
    public const OPERATION_ID    = 'enterprise-admin/get-manage-settings';
    public const OPERATION_MATCH = 'GET /manage/v1/config/settings';

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Config\Settings $hydrator)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace([], [], '/manage/v1/config/settings'));
    }

    public function createResponse(ResponseInterface $response): Schema\GhesGetSettings|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GhesGetSettings::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GhesGetSettings::class, $body);
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
