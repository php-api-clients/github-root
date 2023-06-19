<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPreReceiveEnvironments
{
    public const OPERATION_ID    = 'enterprise-admin/list-pre-receive-environments';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/pre-receive-environments';
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(int $perPage = 30, int $page = 1, string $direction = 'desc', private string $sort = 'created')
    {
        $this->perPage   = $perPage;
        $this->page      = $page;
        $this->direction = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{per_page}', '{page}', '{direction}', '{sort}'], [$this->perPage, $this->page, $this->direction, $this->sort], self::PATH . '?per_page={per_page}&page={page}&direction={direction}&sort={sort}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
