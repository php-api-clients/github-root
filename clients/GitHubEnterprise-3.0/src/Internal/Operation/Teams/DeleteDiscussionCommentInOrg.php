<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteDiscussionCommentInOrg
{
    public const OPERATION_ID    = 'teams/delete-discussion-comment-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    /**team_slug parameter **/
    private string $teamSlug;

    public function __construct(private string $org, string $teamSlug, private int $discussionNumber, private int $commentNumber)
    {
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->commentNumber], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}'));
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
