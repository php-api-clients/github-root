<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class ListSelfHostedRunnersForEnterprise
{
    public const OPERATION_ID = 'enterprise-admin/list-self-hosted-runners-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/runners';
    private const METHOD = 'GET';
    private const PATH = '/enterprises/{enterprise}/actions/runners';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $hydrator, string $enterprise, int $per_page = 30, int $page = 1)
    {
        $this->enterprise = $enterprise;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{per_page}', '{page}'), array($this->enterprise, $this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
