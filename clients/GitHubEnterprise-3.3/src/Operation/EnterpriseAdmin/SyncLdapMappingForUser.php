<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class SyncLdapMappingForUser
{
    public const OPERATION_ID = 'enterprise-admin/sync-ldap-mapping-for-user';
    public const OPERATION_MATCH = 'POST /admin/ldap/users/{username}/sync';
    private const METHOD = 'POST';
    private const PATH = '/admin/ldap/users/{username}/sync';
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync $hydrator, string $username)
    {
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH));
    }
    /**
     * @return Schema\Operation\EnterpriseAdmin\SyncLdapMappingForUser\Response\Applicationjson\H201
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\EnterpriseAdmin\SyncLdapMappingForUser\Response\Applicationjson\H201
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\EnterpriseAdmin\SyncLdapMappingForUser\Response\Applicationjson\H201::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\SyncLdapMappingForUser\Response\Applicationjson\H201::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
