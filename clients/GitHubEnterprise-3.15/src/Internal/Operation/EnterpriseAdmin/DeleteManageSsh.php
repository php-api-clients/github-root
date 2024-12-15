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
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class DeleteManageSsh
{
    public const OPERATION_ID    = 'enterprise-admin/delete-manage-ssh';
    public const OPERATION_MATCH = 'DELETE /manage/v1/access/ssh';

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Access\Ssh $hydrator)
    {
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\GhesDeleteSshRequest::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('DELETE', str_replace([], [], '/manage/v1/access/ssh'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return Observable<Schema\GhesDeleteSshResponse>|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|WithoutBody
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\GhesDeleteSshResponse {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GhesDeleteSshResponse::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\GhesDeleteSshResponse::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
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
            /**
             * Internal error
             **/

            case 500:
                return new WithoutBody(500, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
