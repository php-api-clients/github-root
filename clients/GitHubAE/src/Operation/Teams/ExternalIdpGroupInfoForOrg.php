<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\Teams;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ExternalIdpGroupInfoForOrg
{
    public const OPERATION_ID = 'teams/external-idp-group-info-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-group/{group_id}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/external-group/{group_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the group.**/
    private int $groupId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb $hydrator, string $org, int $groupId)
    {
        $this->org = $org;
        $this->groupId = $groupId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{group_id}'), array($this->org, $this->groupId), self::PATH));
    }
    /**
     * @return Schema\ExternalGroup
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ExternalGroup
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ExternalGroup::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ExternalGroup::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
