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

final class GetReplicationStatus
{
    public const OPERATION_ID    = 'enterprise-admin/get-replication-status';
    public const OPERATION_MATCH = 'GET /manage/v1/replication/status';
    /**The UUID which identifies a node. **/
    private string $uuid;
    /**The cluster roles from the cluster configuration file. **/
    private string $clusterRoles;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Manage\V1\Replication\Status $hydrator, string $uuid, string $clusterRoles)
    {
        $this->uuid         = $uuid;
        $this->clusterRoles = $clusterRoles;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{uuid}', '{cluster_roles}'], [$this->uuid, $this->clusterRoles], '/manage/v1/replication/status' . '?uuid={uuid}&cluster_roles={cluster_roles}'));
    }

    public function createResponse(ResponseInterface $response): Schema\GhesReplicationStatus|WithoutBody
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GhesReplicationStatus::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GhesReplicationStatus::class, $body);
                }

                break;
        }

        switch ($code) {
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
