<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class UpdateDiscussionCommentInOrg
{
    public const OPERATION_ID    = 'teams/update-discussion-comment-in-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**The number that identifies the comment. **/
    private int $commentNumber;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber $hydrator, string $org, string $teamSlug, int $discussionNumber, int $commentNumber)
    {
        $this->org              = $org;
        $this->teamSlug         = $teamSlug;
        $this->discussionNumber = $discussionNumber;
        $this->commentNumber    = $commentNumber;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Teams\UpdateDiscussionCommentInOrg\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{org}', '{team_slug}', '{discussion_number}', '{comment_number}'], [$this->org, $this->teamSlug, $this->discussionNumber, $this->commentNumber], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamDiscussionComment
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamDiscussionComment::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamDiscussionComment::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
