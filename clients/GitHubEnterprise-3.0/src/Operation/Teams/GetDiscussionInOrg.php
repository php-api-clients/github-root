<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetDiscussionInOrg
{
    public const OPERATION_ID = 'teams/get-discussion-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}';
    private string $org;
    /**team_slug parameter**/
    private string $team_slug;
    private int $discussion_number;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb $hydrator, string $org, string $team_slug, int $discussion_number)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{discussion_number}'), array($this->org, $this->team_slug, $this->discussion_number), self::PATH));
    }
    /**
     * @return Schema\TeamDiscussion
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\TeamDiscussion
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
