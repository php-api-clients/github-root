<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteComment
{
    public const OPERATION_ID    = 'issues/delete-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/issues/comments/{comment_id}';
    private string $owner;
    private string $repo;
    /**comment_id parameter**/
    private int $commentId;

    public function __construct(string $owner, string $repo, int $commentId)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->commentId = $commentId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{comment_id}'], [$this->owner, $this->repo, $this->commentId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
