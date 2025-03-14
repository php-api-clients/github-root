<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Dependabot;

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

final class ListAlertsForRepo
{
    public const OPERATION_ID    = 'dependabot/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
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
    /**A comma-separated list of full manifest paths. If specified, only alerts for these manifests will be returned. **/
    private string $manifest;
    /**The scope of the vulnerable dependency. If specified, only alerts with this scope will be returned. **/
    private string $scope;
    /**The property by which to sort the results.
    `created` means when the alert was created.
    `updated` means when the alert's state last changed. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts $hydrator, string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $sort = 'created', string $direction = 'desc')
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->state     = $state;
        $this->severity  = $severity;
        $this->ecosystem = $ecosystem;
        $this->package   = $package;
        $this->manifest  = $manifest;
        $this->scope     = $scope;
        $this->sort      = $sort;
        $this->direction = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{state}', '{severity}', '{ecosystem}', '{package}', '{manifest}', '{scope}', '{sort}', '{direction}'], [$this->owner, $this->repo, $this->state, $this->severity, $this->ecosystem, $this->package, $this->manifest, $this->scope, $this->sort, $this->direction], '/repos/{owner}/{repo}/dependabot/alerts' . '?state={state}&severity={severity}&ecosystem={ecosystem}&package={package}&manifest={manifest}&scope={scope}&sort={sort}&direction={direction}'));
    }

    /** @return Observable<Schema\DependabotAlert>|WithoutBody */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\DependabotAlert {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\DependabotAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\DependabotAlert::class, $body);
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
