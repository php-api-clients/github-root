<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\ApiInsights;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
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

final class GetTimeStatsByActor
{
    public const OPERATION_ID    = 'api-insights/get-time-stats-by-actor';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/time-stats/{actor_type}/{actor_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The type of the actor **/
    private string $actorType;
    /**The ID of the actor **/
    private int $actorId;
    /**The minimum timestamp to query for stats. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats. Defaults to the time 30 days ago. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $maxTimestamp;
    /**The increment of time used to breakdown the query results (5m, 10m, 1h, etc.) **/
    private string $timestampIncrement;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats\ActorType\ActorId $hydrator, string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, string $timestampIncrement)
    {
        $this->org                = $org;
        $this->actorType          = $actorType;
        $this->actorId            = $actorId;
        $this->minTimestamp       = $minTimestamp;
        $this->maxTimestamp       = $maxTimestamp;
        $this->timestampIncrement = $timestampIncrement;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{actor_type}', '{actor_id}', '{min_timestamp}', '{max_timestamp}', '{timestamp_increment}'], [$this->org, $this->actorType, $this->actorId, $this->minTimestamp, $this->maxTimestamp, $this->timestampIncrement], '/orgs/{org}/insights/api/time-stats/{actor_type}/{actor_id}' . '?min_timestamp={min_timestamp}&max_timestamp={max_timestamp}&timestamp_increment={timestamp_increment}'));
    }

    /** @return Observable<Schema\ApiInsightsTimeStats> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ApiInsightsTimeStats {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ApiInsightsTimeStats::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ApiInsightsTimeStats::class, $body);
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
