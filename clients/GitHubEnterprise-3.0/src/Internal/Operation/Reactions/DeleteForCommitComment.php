<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Reactions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteForCommitComment
{
    public const OPERATION_ID    = 'reactions/delete-for-commit-comment';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}';
    /**comment_id parameter **/
    private int $commentId;

    public function __construct(private string $owner, private string $repo, int $commentId, private int $reactionId)
    {
        $this->commentId = $commentId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{owner}', '{repo}', '{comment_id}', '{reaction_id}'], [$this->owner, $this->repo, $this->commentId, $this->reactionId], '/repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}'));
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
