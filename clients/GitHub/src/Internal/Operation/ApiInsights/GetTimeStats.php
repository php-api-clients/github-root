<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\ApiInsights;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats;
use ApiClients\Client\GitHub\Schema\ApiInsightsTimeStats;
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

final class GetTimeStats
{
    public const OPERATION_ID    = 'api-insights/get-time-stats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/time-stats';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats. Defaults to the time 30 days ago. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $maxTimestamp;
    /**The increment of time used to breakdown the query results (5m, 10m, 1h, etc.) **/
    private string $timestampIncrement;

    public function __construct(private SchemaValidator $responseSchemaValidator, private TimeStats $hydrator, string $org, string $minTimestamp, string $maxTimestamp, string $timestampIncrement)
    {
        $this->org                     = $org;
        $this->minTimestamp            = $minTimestamp;
        $this->maxTimestamp            = $maxTimestamp;
        $this->timestampIncrement      = $timestampIncrement;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/insights/api/time-stats{?max_timestamp,min_timestamp,timestamp_increment}'))->expand(['max_timestamp' => $this->maxTimestamp, 'min_timestamp' => $this->minTimestamp, 'org' => $this->org, 'timestamp_increment' => $this->timestampIncrement]));
    }

    /** @return Observable<ApiInsightsTimeStats> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): ApiInsightsTimeStats {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(ApiInsightsTimeStats::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(ApiInsightsTimeStats::class, $body);
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
