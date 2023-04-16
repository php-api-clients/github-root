<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class GetServerStatistics
{
    public const OPERATION_ID    = 'enterprise-admin/get-server-statistics';
    public const OPERATION_MATCH = 'GET /enterprise-installation/{enterprise_or_org}/server-statistics';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise-installation/{enterprise_or_org}/server-statistics';
    /**The slug version of the enterprise name or the login of an organization.**/
    private string $enterpriseOrOrg;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor.**/
    private string $dateStart;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor.**/
    private string $dateEnd;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics $hydrator, string $enterpriseOrOrg, string $dateStart, string $dateEnd)
    {
        $this->enterpriseOrOrg         = $enterpriseOrOrg;
        $this->dateStart               = $dateStart;
        $this->dateEnd                 = $dateEnd;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise_or_org}', '{date_start}', '{date_end}'], [$this->enterpriseOrOrg, $this->dateStart, $this->dateEnd], self::PATH . '?date_start={date_start}&date_end={date_end}'));
    }

    /**
     * @return Observable<Schema\ServerStatistics>
     */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\ServerStatistics::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ServerStatistics {
                            return $this->hydrator->hydrateObject(Schema\ServerStatistics::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
