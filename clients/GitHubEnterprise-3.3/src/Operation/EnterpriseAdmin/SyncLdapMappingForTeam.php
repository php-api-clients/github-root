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

final class SyncLdapMappingForTeam
{
    public const OPERATION_ID    = 'enterprise-admin/sync-ldap-mapping-for-team';
    public const OPERATION_MATCH = 'POST /admin/ldap/teams/{team_id}/sync';
    private const METHOD         = 'POST';
    private const PATH           = '/admin/ldap/teams/{team_id}/sync';
    /**The unique identifier of the team.**/
    private int $teamId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync $hydrator, int $teamId)
    {
        $this->teamId                  = $teamId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}'], [$this->teamId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\Operation\EnterpriseAdmin\SyncLdapMappingForTeam\Response\Applicationjson\H201
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
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\EnterpriseAdmin\SyncLdapMappingForTeam\Response\Applicationjson\H201::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\SyncLdapMappingForTeam\Response\Applicationjson\H201::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
