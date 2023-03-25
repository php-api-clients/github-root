<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Orgs;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListMembers
{
    public const OPERATION_ID = 'orgs/list-members';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/members';
    private string $org;
    /**Filter members returned in the list. Can be one of:  
    \* `2fa_disabled` - Members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled. Available for organization owners.  
    \* `all` - All members the authenticated user can see.**/
    private string $filter;
    /**Filter members returned by their role. Can be one of:  
    \* `all` - All members of the organization, regardless of role.  
    \* `admin` - Organization owners.  
    \* `member` - Non-owner organization members.**/
    private string $role;
    /**Results per page (max 100)**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Members $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Members $hydrator, string $org, string $filter = 'all', string $role = 'all', int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->filter = $filter;
        $this->role = $role;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{filter}', '{role}', '{per_page}', '{page}'), array($this->org, $this->filter, $this->role, $this->perPage, $this->page), self::PATH . '?filter={filter}&role={role}&perPage={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\SimpleUser>|array{code: int,location: string}
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|array
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\SimpleUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\SimpleUser {
                            return $this->hydrator->hydrateObject(Schema\SimpleUser::class, $body);
                        });
                }
                break;
            /**Validation failed**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
            /**Response if requester is not an organization member**/
            case 302:
                return array('code' => 302, 'location' => $response->getHeaderLine('Location'));
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
