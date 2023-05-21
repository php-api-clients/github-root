<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListGlobalWebhooks
{
    public const OPERATION_ID    = 'enterprise-admin/list-global-webhooks';
    public const OPERATION_MATCH = 'GET /admin/hooks';
    private const METHOD         = 'GET';
    private const PATH           = '/admin/hooks';
    /**This API is under preview and subject to change. **/
    private string $accept;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $accept = 'application/vnd.github.superpro-preview+json', int $perPage = 30, int $page = 1)
    {
        $this->accept  = $accept;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{per_page}', '{page}'], [$this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
