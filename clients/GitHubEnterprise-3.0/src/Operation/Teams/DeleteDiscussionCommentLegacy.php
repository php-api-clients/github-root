<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteDiscussionCommentLegacy
{
    public const OPERATION_ID    = 'teams/delete-discussion-comment-legacy';
    public const OPERATION_MATCH = 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}';

    public function __construct(private int $teamId, private int $discussionNumber, private int $commentNumber)
    {
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{discussion_number}', '{comment_number}'], [$this->teamId, $this->discussionNumber, $this->commentNumber], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
