<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Orgs;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class ListSamlSsoAuthorizations
{
    public const OPERATION_ID = 'orgs/list-saml-sso-authorizations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/credential-authorizations';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/credential-authorizations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Page token**/
    private int $page;
    /**Limits the list of credentials authorizations for an organization to a specific login**/
    private string $login;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations $hydrator, string $org, int $page, string $login, int $perPage = 30)
    {
        $this->org = $org;
        $this->page = $page;
        $this->login = $login;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{page}', '{login}', '{per_page}'), array($this->org, $this->page, $this->login, $this->perPage), self::PATH . '?page={page}&login={login}&perPage={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\CredentialAuthorization>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\CredentialAuthorization::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\CredentialAuthorization {
                            return $this->hydrator->hydrateObject(Schema\CredentialAuthorization::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
