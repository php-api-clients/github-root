<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class ListPreReceiveHooks
{
    public const OPERATION_ID = 'enterprise-admin/list-pre-receive-hooks';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-hooks';
    private const METHOD = 'GET';
    private const PATH = '/admin/pre-receive-hooks';
    /**Results per page (max 100)**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    /**One of `asc` (ascending) or `desc` (descending).**/
    private string $direction;
    /**One of `created` (when the repository was starred) or `updated` (when it was last pushed to) or `name`.**/
    private string $sort;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Admin\PreReceiveHooks $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Admin\PreReceiveHooks $hydrator, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->direction = $direction;
        $this->sort = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{per_page}', '{page}', '{direction}', '{sort}'), array($this->per_page, $this->page, $this->direction, $this->sort), self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }
    /**
     * @return \Rx\Observable<Schema\PreReceiveHook>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\PreReceiveHook::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\PreReceiveHook {
                            return $this->hydrator->hydrateObject(Schema\PreReceiveHook::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
