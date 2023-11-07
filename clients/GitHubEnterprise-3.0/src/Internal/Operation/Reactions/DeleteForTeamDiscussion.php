<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Reactions;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteForTeamDiscussion
{
    public const OPERATION_ID    = 'reactions/delete-for-team-discussion';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}';
    /**team_slug parameter **/
    private string $teamSlug;

    public function __construct(private string $org, string $teamSlug, private int $discussionNumber, private int $reactionId)
    {
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{reaction_id}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->reactionId], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}'));
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
