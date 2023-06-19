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

final class GetConfigNodes
{
    public const OPERATION_ID    = 'enterprise-admin/get-config-nodes';
    public const OPERATION_MATCH = 'GET /manage/v1/config/nodes';
    private const METHOD         = 'GET';
    private const PATH           = '/manage/v1/config/nodes';
    /**The UUID which identifies a node. **/
    private string $uuid;
    /**The cluster roles from the cluster configuration file. **/
    private string $clusterRoles;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Manage\V1\Config\Nodes $hydrator, string $uuid, string $clusterRoles)
    {
        $this->uuid         = $uuid;
        $this->clusterRoles = $clusterRoles;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{uuid}', '{cluster_roles}'], [$this->uuid, $this->clusterRoles], self::PATH . '?uuid={uuid}&cluster_roles={cluster_roles}'));
    }

    /** @return Schema\GhesConfigNodes|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\GhesConfigNodes|array
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GhesConfigNodes::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GhesConfigNodes::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Unauthorized
             **/
            case 401:
                return ['code' => 401];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
