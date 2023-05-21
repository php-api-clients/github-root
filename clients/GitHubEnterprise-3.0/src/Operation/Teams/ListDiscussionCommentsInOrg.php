<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussionCommentsInOrg
{
    public const OPERATION_ID    = 'teams/list-discussion-comments-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments';
    private string $org;
    /**team_slug parameter **/
    private string $teamSlug;
    private int $discussionNumber;
    /**One of `asc` (ascending) or `desc` (descending). **/
    private string $direction;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $teamSlug, int $discussionNumber, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->org              = $org;
        $this->teamSlug         = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->direction        = $direction;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{discussion_number}', '{direction}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->direction, $this->perPage, $this->page], self::PATH . '?direction={direction}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
