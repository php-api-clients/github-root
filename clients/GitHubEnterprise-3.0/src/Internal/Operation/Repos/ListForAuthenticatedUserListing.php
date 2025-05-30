<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class ListForAuthenticatedUserListing
{
    public const OPERATION_ID    = 'repos/list-for-authenticated-user';
    public const OPERATION_MATCH = 'LIST /user/repos';
    /**Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc` **/
    private string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $before;
    /**Can be one of `all`, `public`, or `private`. Note: For GitHub AE, can be one of `all`, `internal`, or `private`. **/
    private string $visibility;
    /**Comma-separated list of values. Can include:
    \* `owner`: Repositories that are owned by the authenticated user.
    \* `collaborator`: Repositories that the user has been added to as a collaborator.
    \* `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on. **/
    private string $affiliation;
    /**Can be one of `all`, `owner`, `public`, `private`, `member`. Note: For GitHub AE, can be one of `all`, `owner`, `internal`, `private`, `member`. Default: `all`

    Will cause a `422` error if used in the same request as **visibility** or **affiliation**. Will cause a `422` error if used in the same request as **visibility** or **affiliation**. **/
    private string $type;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`. **/
    private string $sort;
    /**Results per page (max 100) **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\User\Repos $hydrator, string $direction, string $since, string $before, string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', int $perPage = 30, int $page = 1)
    {
        $this->direction   = $direction;
        $this->since       = $since;
        $this->before      = $before;
        $this->visibility  = $visibility;
        $this->affiliation = $affiliation;
        $this->type        = $type;
        $this->sort        = $sort;
        $this->perPage     = $perPage;
        $this->page        = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{direction}', '{since}', '{before}', '{visibility}', '{affiliation}', '{type}', '{sort}', '{per_page}', '{page}'], [$this->direction, $this->since, $this->before, $this->visibility, $this->affiliation, $this->type, $this->sort, $this->perPage, $this->page], '/user/repos' . '?direction={direction}&since={since}&before={before}&visibility={visibility}&affiliation={affiliation}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\Repository>|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|WithoutBody
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Repository {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Repository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\Repository::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Validation failed
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Requires authentication
                     **/

                    case 401:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(401, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
