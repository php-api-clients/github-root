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

final class GetOrgRuleSuites
{
    public const OPERATION_ID    = 'repos/get-org-rule-suites';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/rule-suites';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the ref. Cannot contain wildcard characters. When specified, only rule evaluations triggered for this ref will be returned. **/
    private string $ref;
    /**The name of the repository to filter on. **/
    private string $repositoryName;
    /**The handle for the GitHub user account to filter on. When specified, only rule evaluations triggered by this actor will be returned. **/
    private string $actorName;
    /**The time period to filter by.

    For example, `day` will filter for rule suites that occurred in the past 24 hours, and `week` will filter for insights that occurred in the past 7 days (168 hours). **/
    private string $timePeriod;
    /**The rule results to filter on. When specified, only suites with this result will be returned. **/
    private string $ruleSuiteResult;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/enterprise-server@3.14/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites $hydrator, string $org, string $ref, string $repositoryName, string $actorName, string $timePeriod = 'day', string $ruleSuiteResult = 'all', int $perPage = 30, int $page = 1)
    {
        $this->org             = $org;
        $this->ref             = $ref;
        $this->repositoryName  = $repositoryName;
        $this->actorName       = $actorName;
        $this->timePeriod      = $timePeriod;
        $this->ruleSuiteResult = $ruleSuiteResult;
        $this->perPage         = $perPage;
        $this->page            = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{ref}', '{repository_name}', '{actor_name}', '{time_period}', '{rule_suite_result}', '{per_page}', '{page}'], [$this->org, $this->ref, $this->repositoryName, $this->actorName, $this->timePeriod, $this->ruleSuiteResult, $this->perPage, $this->page], '/orgs/{org}/rulesets/rule-suites' . '?ref={ref}&repository_name={repository_name}&actor_name={actor_name}&time_period={time_period}&rule_suite_result={rule_suite_result}&per_page={per_page}&page={page}'));
    }

    /** @return Observable<Schema\RuleSuites> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\RuleSuites {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RuleSuites::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\RuleSuites::class, $body);
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
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(500, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
