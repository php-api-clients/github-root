<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
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

final class ListAlertsForOrg
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/dependabot/alerts';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**A comma-separated list of states. If specified, only alerts with these states will be returned.

    Can be: `auto_dismissed`, `dismissed`, `fixed`, `open` **/
    private string $state;
    /**A comma-separated list of severities. If specified, only alerts with these severities will be returned.

    Can be: `low`, `medium`, `high`, `critical` **/
    private string $severity;
    /**A comma-separated list of ecosystems. If specified, only alerts for these ecosystems will be returned.

    Can be: `composer`, `go`, `maven`, `npm`, `nuget`, `pip`, `pub`, `rubygems`, `rust` **/
    private string $ecosystem;
    /**A comma-separated list of package names. If specified, only alerts for these packages will be returned. **/
    private string $package;
    /**CVE Exploit Prediction Scoring System (EPSS) percentage. Can be specified as:
    - An exact number (`n`)
    - Comparators such as `>n`, `<n`, `>=n`, `<=n`
    - A range like `n..n`, where `n` is a number from 0.0 to 1.0

    Filters the list of alerts based on EPSS percentages. If specified, only alerts with the provided EPSS percentages will be returned. **/
    private string $epssPercentage;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned. **/
    private string $scope;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /****Deprecated**. The number of results per page (max 100), starting from the last matching result.
    This parameter must not be used in combination with `first`.
    Instead, use `per_page` in combination with `before` to fetch the last page of results. **/
    private int $last;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed.
    `epss_percentage` sorts alerts by the Exploit Prediction Scoring System (EPSS) percentage. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;
    /****Deprecated**. The number of results per page (max 100), starting from the first matching result.
    This parameter must not be used in combination with `last`.
    Instead, use `per_page` in combination with `after` to fetch the first page of results. **/
    private int $first;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts $hydrator, string $org, string $state, string $severity, string $ecosystem, string $package, string $epssPercentage, string $scope, string $before, string $after, int $last, string $sort = 'created', string $direction = 'desc', int $first = 30, int $perPage = 30)
    {
        $this->org            = $org;
        $this->state          = $state;
        $this->severity       = $severity;
        $this->ecosystem      = $ecosystem;
        $this->package        = $package;
        $this->epssPercentage = $epssPercentage;
        $this->scope          = $scope;
        $this->before         = $before;
        $this->after          = $after;
        $this->last           = $last;
        $this->sort           = $sort;
        $this->direction      = $direction;
        $this->first          = $first;
        $this->perPage        = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{state}', '{severity}', '{ecosystem}', '{package}', '{epss_percentage}', '{scope}', '{before}', '{after}', '{last}', '{sort}', '{direction}', '{first}', '{per_page}'], [$this->org, $this->state, $this->severity, $this->ecosystem, $this->package, $this->epssPercentage, $this->scope, $this->before, $this->after, $this->last, $this->sort, $this->direction, $this->first, $this->perPage], '/orgs/{org}/dependabot/alerts' . '?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&epss_percentage={epss_percentage}&scope={scope}&before={before}&after={after}&last={last}&sort={sort}&direction={direction}&first={first}&per_page={per_page}'));
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|WithoutBody */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\DependabotAlertWithRepository {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DependabotAlertWithRepository::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\DependabotAlertWithRepository::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationErrorSimple(422, $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body));
                }

                break;
            case 'application/scim+json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Bad Request
                     **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
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
