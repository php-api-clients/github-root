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

final class ListMembersInOrgListing
{
    public const OPERATION_ID    = 'teams/list-members-in-org';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/teams/{team_slug}/members';
    /**team_slug parameter **/
    private string $teamSlug;
    /**Filters members returned by their role in the team. Can be one of:
    \* `member` - normal members of the team.
    \* `maintainer` - team maintainers.
    \* `all` - all members of the team. **/
    private string $role;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members $hydrator, private string $org, string $teamSlug, string $role = 'all', int $perPage = 30, int $page = 1)
    {
        $this->teamSlug = $teamSlug;
        $this->role     = $role;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{team_slug}', '{role}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->role, $this->perPage, $this->page], '/orgs/{org}/teams/{team_slug}/members' . '?role={role}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\SimpleUser> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\SimpleUser {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\SimpleUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\SimpleUser::class, $body);
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
