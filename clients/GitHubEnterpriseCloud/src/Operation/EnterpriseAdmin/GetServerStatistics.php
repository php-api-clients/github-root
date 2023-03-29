<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class GetServerStatistics
{
    public const OPERATION_ID = 'enterprise-admin/get-server-statistics';
    public const OPERATION_MATCH = 'GET /enterprise-installation/{enterprise_or_org}/server-statistics';
    private const METHOD = 'GET';
    private const PATH = '/enterprise-installation/{enterprise_or_org}/server-statistics';
    /**The slug version of the enterprise name or the login of an organization.**/
    private string $enterpriseOrOrg;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor.**/
    private string $dateStart;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor.**/
    private string $dateEnd;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics $hydrator, string $enterpriseOrOrg, string $dateStart, string $dateEnd)
    {
        $this->enterpriseOrOrg = $enterpriseOrOrg;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise_or_org}', '{date_start}', '{date_end}'), array($this->enterpriseOrOrg, $this->dateStart, $this->dateEnd), self::PATH . '?dateStart={date_start}&dateEnd={date_end}'));
    }
    /**
     * @return \Rx\Observable<Schema\ServerStatistics>
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
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\ServerStatistics::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\ServerStatistics {
                            return $this->hydrator->hydrateObject(Schema\ServerStatistics::class, $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
