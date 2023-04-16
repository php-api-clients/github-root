<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteDiscussionCommentInOrg
{
    public const OPERATION_ID    = 'teams/delete-discussion-comment-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    private string $org;
    /**team_slug parameter**/
    private string $teamSlug;
    private int $discussionNumber;
    private int $commentNumber;

    public function __construct(string $org, string $teamSlug, int $discussionNumber, int $commentNumber)
    {
        $this->org              = $org;
        $this->teamSlug         = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->commentNumber    = $commentNumber;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->commentNumber], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
