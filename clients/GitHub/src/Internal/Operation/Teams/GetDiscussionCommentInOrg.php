<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetDiscussionCommentInOrg
{
    public const OPERATION_ID    = 'teams/get-discussion-comment-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**The number that identifies the comment. **/
    private int $commentNumber;

    public function __construct(private SchemaValidator $responseSchemaValidator, private CommentNumber $hydrator, string $org, string $teamSlug, int $discussionNumber, int $commentNumber)
    {
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->discussionNumber        = $discussionNumber;
        $this->commentNumber           = $commentNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}'))->expand(['comment_number' => $this->commentNumber, 'discussion_number' => $this->discussionNumber, 'org' => $this->org, 'team_slug' => $this->teamSlug]));
    }

    public function createResponse(ResponseInterface $response): TeamDiscussionComment
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamDiscussionComment::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamDiscussionComment::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
