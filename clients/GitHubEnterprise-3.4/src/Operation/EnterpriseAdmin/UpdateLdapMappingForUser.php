<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class UpdateLdapMappingForUser
{
    public const OPERATION_ID = 'enterprise-admin/update-ldap-mapping-for-user';
    public const OPERATION_MATCH = 'PATCH /admin/ldap/users/{username}/mapping';
    private const METHOD = 'PATCH';
    private const PATH = '/admin/ldap/users/{username}/mapping';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping $hydrator, string $username)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\EnterpriseAdmin\UpdateLdapMappingForUser\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}'), array($this->username), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\LdapMappingUser
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\LdapMappingUser
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\LdapMappingUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\LdapMappingUser::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
