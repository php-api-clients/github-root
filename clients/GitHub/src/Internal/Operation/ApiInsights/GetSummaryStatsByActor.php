<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\ApiInsights;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId;
use ApiClients\Client\GitHub\Schema\ApiInsightsSummaryStats;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetSummaryStatsByActor
{
    public const OPERATION_ID    = 'api-insights/get-summary-stats-by-actor';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/summary-stats/{actor_type}/{actor_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats. Defaults to the time 30 days ago. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $maxTimestamp;
    /**The type of the actor **/
    private string $actorType;
    /**The ID of the actor **/
    private int $actorId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private ActorId $hydrator, string $org, string $minTimestamp, string $maxTimestamp, string $actorType, int $actorId)
    {
        $this->org                     = $org;
        $this->minTimestamp            = $minTimestamp;
        $this->maxTimestamp            = $maxTimestamp;
        $this->actorType               = $actorType;
        $this->actorId                 = $actorId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/orgs/{org}/insights/api/summary-stats/{actor_type}/{actor_id}{?max_timestamp,min_timestamp}'))->expand(['actor_id' => $this->actorId, 'actor_type' => $this->actorType, 'max_timestamp' => $this->maxTimestamp, 'min_timestamp' => $this->minTimestamp, 'org' => $this->org]));
    }

    public function createResponse(ResponseInterface $response): ApiInsightsSummaryStats
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ApiInsightsSummaryStats::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(ApiInsightsSummaryStats::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
