<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetServerStatistics
{
    public const OPERATION_ID    = 'enterprise-admin/get-server-statistics';
    public const OPERATION_MATCH = 'GET /enterprise-installation/{enterprise_or_org}/server-statistics';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprise-installation/{enterprise_or_org}/server-statistics';
    /**The slug version of the enterprise name or the login of an organization. **/
    private string $enterpriseOrOrg;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor. **/
    private string $dateStart;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-cloud@latest//rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor. **/
    private string $dateEnd;

    public function __construct(string $enterpriseOrOrg, string $dateStart, string $dateEnd)
    {
        $this->enterpriseOrOrg = $enterpriseOrOrg;
        $this->dateStart       = $dateStart;
        $this->dateEnd         = $dateEnd;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise_or_org}', '{date_start}', '{date_end}'], [$this->enterpriseOrOrg, $this->dateStart, $this->dateEnd], self::PATH . '?date_start={date_start}&date_end={date_end}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
