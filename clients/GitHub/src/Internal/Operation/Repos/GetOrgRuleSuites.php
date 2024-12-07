<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Repos;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites;
use ApiClients\Client\GitHub\Schema\BasicError;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;

final class GetOrgRuleSuites
{
    public const OPERATION_ID    = 'repos/get-org-rule-suites';
    public const OPERATION_MATCH = 'GET /orgs/{org}/rulesets/rule-suites';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the ref. Cannot contain wildcard characters. Optionally prefix with `refs/heads/` to limit to branches or `refs/tags/` to limit to tags. Omit the prefix to search across all refs. When specified, only rule evaluations triggered for this ref will be returned. **/
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
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;

    public function __construct(private SchemaValidator $responseSchemaValidator, private RuleSuites $hydrator, string $org, string $ref, string $repositoryName, string $actorName, string $timePeriod = 'day', string $ruleSuiteResult = 'all', int $perPage = 30, int $page = 1)
    {
        $this->org                     = $org;
        $this->ref                     = $ref;
        $this->repositoryName          = $repositoryName;
        $this->actorName               = $actorName;
        $this->timePeriod              = $timePeriod;
        $this->ruleSuiteResult         = $ruleSuiteResult;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/rulesets/rule-suites{?actor_name,page,per_page,ref,repository_name,rule_suite_result,time_period}'))->expand(['actor_name' => $this->actorName, 'org' => $this->org, 'page' => $this->page, 'per_page' => $this->perPage, 'ref' => $this->ref, 'repository_name' => $this->repositoryName, 'rule_suite_result' => $this->ruleSuiteResult, 'time_period' => $this->timePeriod]));
    }

    /** @return Observable<\ApiClients\Client\GitHub\Schema\RuleSuites> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): \ApiClients\Client\GitHub\Schema\RuleSuites {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(\ApiClients\Client\GitHub\Schema\RuleSuites::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(\ApiClients\Client\GitHub\Schema\RuleSuites::class, $body);
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                    /**
                     * Internal Error
                     **/

                    case 500:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(500, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
