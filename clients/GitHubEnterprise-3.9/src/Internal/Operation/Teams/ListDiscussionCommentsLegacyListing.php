<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Teams;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListDiscussionCommentsLegacyListing
{
    public const OPERATION_ID    = 'teams/list-discussion-comments-legacy';
    public const OPERATION_MATCH = 'LIST /teams/{team_id}/discussions/{discussion_number}/comments';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.9/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.9/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments $hydrator, int $teamId, int $discussionNumber, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->teamId           = $teamId;
        $this->discussionNumber = $discussionNumber;
        $this->direction        = $direction;
        $this->perPage          = $perPage;
        $this->page             = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{team_id}', '{discussion_number}', '{direction}', '{per_page}', '{page}'], [$this->teamId, $this->discussionNumber, $this->direction, $this->perPage, $this->page], '/teams/{team_id}/discussions/{discussion_number}/comments' . '?direction={direction}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\TeamDiscussionComment> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\TeamDiscussionComment {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamDiscussionComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TeamDiscussionComment::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
