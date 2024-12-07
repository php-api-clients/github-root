<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\ApiInsights;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SubjectStats;
use ApiClients\Client\GitHub\Schema\ApiInsightsSubjectStats;
use cebe\openapi\Reader;
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

final class GetSubjectStats
{
    public const OPERATION_ID    = 'api-insights/get-subject-stats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/subject-stats';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats. Defaults to the time 30 days ago. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $maxTimestamp;
    /**The property to sort the results by. **/
    private array $sort;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private SchemaValidator $responseSchemaValidator, private SubjectStats $hydrator, string $org, string $minTimestamp, string $maxTimestamp, array $sort, int $page = 1, int $perPage = 30, string $direction = 'desc')
    {
        $this->org                     = $org;
        $this->minTimestamp            = $minTimestamp;
        $this->maxTimestamp            = $maxTimestamp;
        $this->sort                    = $sort;
        $this->page                    = $page;
        $this->perPage                 = $perPage;
        $this->direction               = $direction;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/insights/api/subject-stats{?direction,max_timestamp,min_timestamp,page,per_page,sort*}'))->expand(['direction' => $this->direction, 'max_timestamp' => $this->maxTimestamp, 'min_timestamp' => $this->minTimestamp, 'org' => $this->org, 'page' => $this->page, 'per_page' => $this->perPage, 'sort' => $this->sort]));
    }

    /** @return Observable<ApiInsightsSubjectStats> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): ApiInsightsSubjectStats {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ApiInsightsSubjectStats::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ApiInsightsSubjectStats::class, $body);
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
