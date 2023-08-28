<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Issues;

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

final class ListForOrgListing
{
    public const OPERATION_ID    = 'issues/list-for-org';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/issues';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/issues';
    /**A list of comma separated label names. Example: `bug,ui,@high` **/
    private string $labels;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**Indicates which sorts of issues to return. Can be one of:
    \* `assigned`: Issues assigned to you
    \* `created`: Issues created by you
    \* `mentioned`: Issues mentioning you
    \* `subscribed`: Issues you're subscribed to updates for
    \* `all` or `repos`: All issues the authenticated user can see, regardless of participation or creation **/
    private string $filter;
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

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Issues $hydrator, private string $org, string $labels, string $since, string $filter = 'assigned', string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->labels    = $labels;
        $this->since     = $since;
        $this->filter    = $filter;
        $this->state     = $state;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{labels}', '{since}', '{filter}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->org, $this->labels, $this->since, $this->filter, $this->state, $this->sort, $this->direction, $this->perPage, $this->page], self::PATH . '?labels={labels}&since={since}&filter={filter}&state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Issue> */
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
