<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class ListIdpGroupsForOrg
{
    public const OPERATION_ID = 'teams/list-idp-groups-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/team-sync/groups';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/team-sync/groups';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Page token**/
    private string $page;
    /**Filters the results to return only those that begin with the value specified by this parameter. For example, a value of `ab` will return results that begin with "ab".**/
    private string $q;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups $hydrator, string $org, string $page, string $q, int $perPage = 30)
    {
        $this->org = $org;
        $this->page = $page;
        $this->q = $q;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{page}', '{q}', '{per_page}'), array($this->org, $this->page, $this->q, $this->perPage), self::PATH . '?page={page}&q={q}&perPage={per_page}'));
    }
    /**
     * @return Schema\GroupMapping
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\GroupMapping
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
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
