<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListChildInOrg
{
    public const OPERATION_ID    = 'teams/list-child-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/teams';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/teams';
    /**team_slug parameter **/
    private string $teamSlug;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private string $org, string $teamSlug, int $perPage = 30, int $page = 1)
    {
        $this->teamSlug = $teamSlug;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
