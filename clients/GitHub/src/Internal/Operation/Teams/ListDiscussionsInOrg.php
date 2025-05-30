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
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class ListDiscussionsInOrg
{
    public const OPERATION_ID    = 'teams/list-discussions-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**Pinned discussions only filter **/
    private string $pinned;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions $hydrator, string $org, string $teamSlug, string $pinned, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->teamSlug  = $teamSlug;
        $this->pinned    = $pinned;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{team_slug}', '{pinned}', '{direction}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->pinned, $this->direction, $this->perPage, $this->page], '/orgs/{org}/teams/{team_slug}/discussions' . '?pinned={pinned}&direction={direction}&per_page={per_page}&page={page}'));
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
