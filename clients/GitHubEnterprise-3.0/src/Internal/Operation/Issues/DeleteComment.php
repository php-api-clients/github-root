<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Issues;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteComment
{
    public const OPERATION_ID    = 'issues/delete-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}';
    /**comment_id parameter **/
    private int $commentId;

    public function __construct(private string $owner, private string $repo, int $commentId)
    {
        $this->commentId = $commentId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{comment_id}'], [$this->owner, $this->repo, $this->commentId], '/repos/{owner}/{repo}/issues/comments/{comment_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
