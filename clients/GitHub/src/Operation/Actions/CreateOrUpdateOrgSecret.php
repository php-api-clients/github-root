<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CreateOrUpdateOrgSecret
{
    public const OPERATION_ID = 'actions/create-or-update-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/secrets/{secret_name}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/secrets/{secret_name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $hydrator, string $org, string $secret_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Actions\CreateOrUpdateOrgSecret\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\EmptyObject
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\EmptyObject
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response when creating a secret**/
            case 201:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\EmptyObject::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\EmptyObject::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
