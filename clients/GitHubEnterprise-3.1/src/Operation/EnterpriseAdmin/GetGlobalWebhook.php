<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetGlobalWebhook
{
    public const OPERATION_ID = 'enterprise-admin/get-global-webhook';
    public const OPERATION_MATCH = 'GET /admin/hooks/{hook_id}';
    private const METHOD = 'GET';
    private const PATH = '/admin/hooks/{hook_id}';
    /**The unique identifier of the hook.**/
    private int $hookId;
    /**This API is under preview and subject to change.**/
    private string $accept;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\Hooks\CbHookIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\Hooks\CbHookIdRcb $hydrator, int $hookId, string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->hookId = $hookId;
        $this->accept = $accept;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{hook_id}'), array($this->hookId), self::PATH));
    }
    /**
     * @return Schema\GlobalHook
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\GlobalHook
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\GlobalHook::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\GlobalHook::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
