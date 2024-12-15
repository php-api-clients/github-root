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
use function str_replace;

final class GetManageMaintenance
{
    public const OPERATION_ID    = 'enterprise-admin/get-manage-maintenance';
    public const OPERATION_MATCH = 'GET /manage/v1/maintenance';
    /**The UUID which identifies a node. **/
    private string $uuid;
    /**The cluster roles from the cluster configuration file. **/
    private string $clusterRoles;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Maintenance $hydrator, string $uuid, string $clusterRoles)
    {
        $this->uuid         = $uuid;
        $this->clusterRoles = $clusterRoles;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{uuid}', '{cluster_roles}'], [$this->uuid, $this->clusterRoles], '/manage/v1/maintenance' . '?uuid={uuid}&cluster_roles={cluster_roles}'));
    }

    /** @return Observable<Schema\GhesGetMaintenance>|WithoutBody */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\GhesGetMaintenance {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GhesGetMaintenance::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\GhesGetMaintenance::class, $body);
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
