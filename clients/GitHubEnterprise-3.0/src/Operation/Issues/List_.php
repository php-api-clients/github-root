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

use function explode;
use function json_decode;
use function str_replace;

final class List_
{
    public const OPERATION_ID    = 'issues/list';
    public const OPERATION_MATCH = 'GET /issues';
    private const METHOD         = 'GET';
    private const PATH           = '/issues';
    /**A list of comma separated label names. Example: `bug,ui,@high`**/
    private string $labels;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    private bool $collab;
    private bool $orgs;
    private bool $owned;
    private bool $pulls;
    /**Indicates which sorts of issues to return. Can be one of:
    \* `assigned`: Issues assigned to you
    \* `created`: Issues created by you
    \* `mentioned`: Issues mentioning you
    \* `subscribed`: Issues you're subscribed to updates for
    \* `all` or `repos`: All issues the authenticated user can see, regardless of participation or creation**/
    private string $filter;
    /**Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.**/
    private string $state;
    /**What to sort results by. Can be either `created`, `updated`, `comments`.**/
    private string $sort;
    /**One of `asc` (ascending) or `desc` (descending).**/
    private string $direction;
    /**Results per page (max 100)**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Issues $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Issues $hydrator, string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter = 'assigned', string $state = 'open', string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->labels                  = $labels;
        $this->since                   = $since;
        $this->collab                  = $collab;
        $this->orgs                    = $orgs;
        $this->owned                   = $owned;
        $this->pulls                   = $pulls;
        $this->filter                  = $filter;
        $this->state                   = $state;
        $this->sort                    = $sort;
        $this->direction               = $direction;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{labels}', '{since}', '{collab}', '{orgs}', '{owned}', '{pulls}', '{filter}', '{state}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->labels, $this->since, $this->collab, $this->orgs, $this->owned, $this->pulls, $this->filter, $this->state, $this->sort, $this->direction, $this->perPage, $this->page], self::PATH . '?labels={labels}&since={since}&collab={collab}&orgs={orgs}&owned={owned}&pulls={pulls}&filter={filter}&state={state}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\Issue>
     */
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
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Issue::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Issue {
                            return $this->hydrator->hydrateObject(Schema\Issue::class, $body);
                        });
                    /**
                     * Validation failed
                    **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                    /**
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
