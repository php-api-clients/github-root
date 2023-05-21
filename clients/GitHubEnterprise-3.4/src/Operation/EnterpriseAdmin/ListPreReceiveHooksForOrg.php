<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPreReceiveHooksForOrg
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-hooks-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/pre-receive-hooks';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/pre-receive-hooks';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The sort order for the response collection. **/
    private string $sort;

    public function __construct(string $org, int $perPage = 30, int $page = 1, string $direction = 'desc', string $sort = 'created')
    {
        $this->org       = $org;
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->org, $this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
