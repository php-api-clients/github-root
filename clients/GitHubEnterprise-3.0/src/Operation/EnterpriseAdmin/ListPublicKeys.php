<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPublicKeys
{
    public const OPERATION_ID    = 'enterprise-admin/list-public-keys';
    public const OPERATION_MATCH = 'GET /admin/keys';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/keys';
    /**Only show public keys accessed after the given time. **/
    private string $since;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**One of `asc` (ascending) or `desc` (descending). **/
    private string $direction;

    public function __construct(string $since, int $perPage = 30, int $page = 1, string $direction = 'desc', private string $sort = 'created')
    {
        $this->since     = $since;
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{since}', '{per_page}', '{page}', '{direction}', '{sort}'], [$this->since, $this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?since={since}&per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
