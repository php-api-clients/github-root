<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Operation\Licenses;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class GetAllCommonlyUsed
{
    public const OPERATION_ID = 'licenses/get-all-commonly-used';
    public const OPERATION_MATCH = 'GET /licenses';
    private const METHOD = 'GET';
    private const PATH = '/licenses';
    private bool $featured;
    /**Results per page (max 100)**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Licenses $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Licenses $hydrator, bool $featured, int $per_page = 30, int $page = 1)
    {
        $this->featured = $featured;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{featured}', '{per_page}', '{page}'), array($this->featured, $this->per_page, $this->page), self::PATH . '?featured={featured}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\LicenseSimple>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\LicenseSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\LicenseSimple {
                            return $this->hydrator->hydrateObject(Schema\LicenseSimple::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
