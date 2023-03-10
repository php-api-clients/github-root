<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetPreReceiveEnvironment
{
    public const OPERATION_ID = 'enterprise-admin/get-pre-receive-environment';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments/{pre_receive_environment_id}';
    private const METHOD = 'GET';
    private const PATH = '/admin/pre-receive-environments/{pre_receive_environment_id}';
    /**The unique identifier of the pre-receive environment.**/
    private int $pre_receive_environment_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $hydrator, int $pre_receive_environment_id)
    {
        $this->pre_receive_environment_id = $pre_receive_environment_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{pre_receive_environment_id}'), array($this->pre_receive_environment_id), self::PATH));
    }
    /**
     * @return Schema\PreReceiveEnvironment
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\PreReceiveEnvironment
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\PreReceiveEnvironment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\PreReceiveEnvironment::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
