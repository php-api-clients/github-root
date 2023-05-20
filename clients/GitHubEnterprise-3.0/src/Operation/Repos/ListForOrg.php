<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    public const OPERATION_ID    = 'repos/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/repos';
    private string $org;
    /**Specifies the types of repositories you want returned. Can be one of `all`, `public`, `private`, `forks`, `sources`, `member`, `internal`. Note: For GitHub AE, can be one of `all`, `private`, `forks`, `sources`, `member`, `internal`. Default: `all`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `type` can also be `internal`. However, the `internal` value is not yet supported when a GitHub App calls this API with an installation access token. **/
    private string $type;
    /**Can be one of `asc` or `desc`. Default: when using `full_name`: `asc`, otherwise `desc` **/
    private string $direction;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`. **/
    private string $sort;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $type, string $direction, string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->type      = $type;
        $this->direction = $direction;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{type}', '{direction}', '{sort}', '{per_page}', '{page}'], [$this->org, $this->type, $this->direction, $this->sort, $this->perPage, $this->page], self::PATH . '?type={type}&direction={direction}&sort={sort}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
