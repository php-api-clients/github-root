<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListExternalIdpGroupsForOrg
{
    public const OPERATION_ID = 'teams/list-external-idp-groups-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/external-groups';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/external-groups';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Page token**/
    private int $page;
    /**Limits the list to groups containing the text in the group name**/
    private string $displayName;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $hydrator, string $org, int $page, string $displayName, int $perPage = 30)
    {
        $this->org = $org;
        $this->page = $page;
        $this->displayName = $displayName;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{page}', '{display_name}', '{per_page}'), array($this->org, $this->page, $this->displayName, $this->perPage), self::PATH . '?page={page}&displayName={display_name}&perPage={per_page}'));
    }
    /**
     * @return Schema\ExternalGroups
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ExternalGroups
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ExternalGroups::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ExternalGroups::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
