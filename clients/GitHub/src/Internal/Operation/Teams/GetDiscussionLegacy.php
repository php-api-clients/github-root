<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
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

final class GetDiscussionLegacy
{
    public const OPERATION_ID    = 'teams/get-discussion-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;

    public function __construct(private SchemaValidator $responseSchemaValidator, private DiscussionNumber $hydrator, int $teamId, int $discussionNumber)
    {
        $this->teamId                  = $teamId;
        $this->discussionNumber        = $discussionNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/teams/{team_id}/discussions/{discussion_number}'))->expand(['discussion_number' => $this->discussionNumber, 'team_id' => $this->teamId]));
    }

    public function createResponse(ResponseInterface $response): TeamDiscussion
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamDiscussion::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(TeamDiscussion::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
