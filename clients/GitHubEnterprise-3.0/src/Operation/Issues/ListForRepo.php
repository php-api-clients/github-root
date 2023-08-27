<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Issues;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
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

final class ListForRepo
{
    public const OPERATION_ID    = 'issues/list-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues';
    /**If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned. **/
    private string $milestone;
    /**Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user. **/
    private string $assignee;
    /**The user that created the issue. **/
    private string $creator;
    /**A user that's mentioned in the issue. **/
    private string $mentioned;
    /**A list of comma separated label names. Example: `bug,ui,@high` **/
    private string $labels;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`. **/
    private string $state;
    /**What to sort results by. Can be either `created`, `updated`, `comments`. **/
    private string $sort;
    /**One of `asc` (ascending) or `desc` (descending). **/
    private string $direction;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Repos\Owner\Repo\Issues $hydrator, private string $owner, private string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->milestone = $milestone;
        $this->assignee  = $assignee;
        $this->creator   = $creator;
        $this->mentioned = $mentioned;
        $this->labels    = $labels;
        $this->since     = $since;
        $this->state     = $state;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{milestone}', '{assignee}', '{creator}', '{mentioned}', '{labels}', '{since}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->milestone, $this->assignee, $this->creator, $this->mentioned, $this->labels, $this->since, $this->state, $this->sort, $this->direction, $this->perPage, $this->page], self::PATH . '?milestone={milestone}&assignee={assignee}&creator={creator}&mentioned={mentioned}&labels={labels}&since={since}&state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Issue>|Schema\BasicError */
    public function createResponse(ResponseInterface $response): Observable|Schema\BasicError
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Issue {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Issue::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrators->hydrateObject(Schema\Issue::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Moved permanently
                     **/

                    case 301:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                    /**
                     * Validation failed
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
