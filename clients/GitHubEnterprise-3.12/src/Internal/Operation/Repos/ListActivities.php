<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
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

final class ListActivities
{
    public const OPERATION_ID    = 'repos/list-activities';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/activity';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.12/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.12/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/enterprise-server@3.12/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.12/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**The Git reference for the activities you want to list.

    The `ref` for a branch can be formatted either as `refs/heads/BRANCH_NAME` or `BRANCH_NAME`, where `BRANCH_NAME` is the name of your branch. **/
    private string $ref;
    /**The GitHub username to use to filter by the actor who performed the activity. **/
    private string $actor;
    /**The time period to filter by.

    For example, `day` will filter for activity that occurred in the past 24 hours, and `week` will filter for activity that occurred in the past 7 days (168 hours). **/
    private string $timePeriod;
    /**The activity type to filter by.

    For example, you can choose to filter by "force_push", to see all force pushes to the repository. **/
    private string $activityType;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.12/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Activity $hydrator, string $owner, string $repo, string $before, string $after, string $ref, string $actor, string $timePeriod, string $activityType, string $direction = 'desc', int $perPage = 30)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->before       = $before;
        $this->after        = $after;
        $this->ref          = $ref;
        $this->actor        = $actor;
        $this->timePeriod   = $timePeriod;
        $this->activityType = $activityType;
        $this->direction    = $direction;
        $this->perPage      = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{before}', '{after}', '{ref}', '{actor}', '{time_period}', '{activity_type}', '{direction}', '{per_page}'], [$this->owner, $this->repo, $this->before, $this->after, $this->ref, $this->actor, $this->timePeriod, $this->activityType, $this->direction, $this->perPage], '/repos/{owner}/{repo}/activity' . '?before={before}&after={after}&ref={ref}&actor={actor}&time_period={time_period}&activity_type={activity_type}&direction={direction}&per_page={per_page}'));
    }

    /** @return Observable<Schema\Activity> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Activity {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Activity::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Activity::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationErrorSimple(422, $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
