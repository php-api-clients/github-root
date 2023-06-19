<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListCommentsForCommit
{
    public const OPERATION_ID    = 'repos/list-comments-for-commit';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/commits/{commit_sha}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/commits/{commit_sha}/comments';
    /**commit_sha parameter **/
    private string $commitSha;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private string $owner, private string $repo, string $commitSha, int $perPage = 30, int $page = 1)
    {
        $this->commitSha = $commitSha;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{commit_sha}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->commitSha, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
