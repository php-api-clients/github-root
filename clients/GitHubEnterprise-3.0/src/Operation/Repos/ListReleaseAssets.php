<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReleaseAssets
{
    public const OPERATION_ID    = 'repos/list-release-assets';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/releases/{release_id}/assets';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/releases/{release_id}/assets';
    /**release_id parameter **/
    private int $releaseId;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private string $owner, private string $repo, int $releaseId, int $perPage = 30, int $page = 1)
    {
        $this->releaseId = $releaseId;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{release_id}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->releaseId, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
