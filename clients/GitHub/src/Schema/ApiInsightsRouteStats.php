<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class ApiInsightsRouteStats implements \ApiClients\Client\GitHub\Contract\ApiInsightsRouteStats
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "http_method": {
            "type": "string",
            "description": "The HTTP method"
        },
        "api_route": {
            "type": "string",
            "description": "The API path\'s route template"
        },
        "total_request_count": {
            "type": "integer",
            "description": "The total number of requests within the queried time period",
            "format": "int64"
        },
        "rate_limited_request_count": {
            "type": "integer",
            "description": "The total number of requests that were rate limited within the queried time period",
            "format": "int64"
        },
        "last_rate_limited_timestamp": {
            "type": [
                "string",
                "null"
            ]
        },
        "last_request_timestamp": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "http_method": "generated",
    "api_route": "generated",
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';
    /**
     * httpMethod: The HTTP method
     * apiRoute: The API path's route template
     * totalRequestCount: The total number of requests within the queried time period
     * rateLimitedRequestCount: The total number of requests that were rate limited within the queried time period
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('http_method')] public ?string $httpMethod, #[\EventSauce\ObjectHydrator\MapFrom('api_route')] public ?string $apiRoute, #[\EventSauce\ObjectHydrator\MapFrom('total_request_count')] public ?int $totalRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('rate_limited_request_count')] public ?int $rateLimitedRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('last_rate_limited_timestamp')] public ?string $lastRateLimitedTimestamp, #[\EventSauce\ObjectHydrator\MapFrom('last_request_timestamp')] public ?string $lastRequestTimestamp)
    {
    }
}
