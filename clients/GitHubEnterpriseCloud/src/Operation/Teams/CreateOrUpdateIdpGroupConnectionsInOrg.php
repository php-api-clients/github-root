<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class CreateOrUpdateIdpGroupConnectionsInOrg
{
    public const OPERATION_ID = 'teams/create-or-update-idp-group-connections-in-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/team-sync/group-mappings';
    private const METHOD = 'PATCH';
    private const PATH = '/orgs/{org}/teams/{team_slug}/team-sync/group-mappings';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\TeamDashSync\GroupDashMappings $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\TeamDashSync\GroupDashMappings $hydrator, string $org, string $team_slug)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Teams\CreateOrUpdateIdpGroupConnectionsInOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->team_slug), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\GroupMapping
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\GroupMapping
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\GroupMapping::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\GroupMapping::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
