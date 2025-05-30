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

final class ListDiscussionsLegacy
{
    public const OPERATION_ID    = 'teams/list-discussions-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions';
    /**One of `asc` (ascending) or `desc` (descending). **/
    private string $direction;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Teams\TeamId\Discussions $hydrator, private int $teamId, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{team_id}', '{direction}', '{per_page}', '{page}'], [$this->teamId, $this->direction, $this->perPage, $this->page], '/teams/{team_id}/discussions' . '?direction={direction}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\TeamDiscussion> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\TeamDiscussion {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
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
