<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Teams;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

final class UpdateDiscussionLegacy
{
    public const OPERATION_ID    = 'teams/update-discussion-legacy';
    public const OPERATION_MATCH = 'PATCH /teams/{team_id}/discussions/{discussion_number}';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber $hydrator, int $teamId, int $discussionNumber)
    {
        $this->teamId           = $teamId;
        $this->discussionNumber = $discussionNumber;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Teams\UpdateDiscussionLegacy\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{team_id}', '{discussion_number}'], [$this->teamId, $this->discussionNumber], '/teams/{team_id}/discussions/{discussion_number}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamDiscussion
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
