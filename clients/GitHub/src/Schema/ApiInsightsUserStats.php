<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class ApiInsightsUserStats implements \ApiClients\Client\GitHub\Contract\ApiInsightsUserStats
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "actor_type": {
            "type": "string"
        },
        "actor_name": {
            "type": "string"
        },
        "actor_id": {
            "type": "integer",
            "format": "int64"
        },
        "integration_id": {
            "type": [
                "integer",
                "null"
            ],
            "format": "int64"
        },
        "oauth_application_id": {
            "type": [
                "integer",
                "null"
            ],
            "format": "int64"
        },
        "total_request_count": {
            "type": "integer"
        },
        "rate_limited_request_count": {
            "type": "integer"
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
    "actor_type": "generated",
    "actor_name": "generated",
    "actor_id": 8,
    "integration_id": 14,
    "oauth_application_id": 20,
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('actor_type')] public ?string $actorType, #[\EventSauce\ObjectHydrator\MapFrom('actor_name')] public ?string $actorName, #[\EventSauce\ObjectHydrator\MapFrom('actor_id')] public ?int $actorId, #[\EventSauce\ObjectHydrator\MapFrom('integration_id')] public ?int $integrationId, #[\EventSauce\ObjectHydrator\MapFrom('oauth_application_id')] public ?int $oauthApplicationId, #[\EventSauce\ObjectHydrator\MapFrom('total_request_count')] public ?int $totalRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('rate_limited_request_count')] public ?int $rateLimitedRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('last_rate_limited_timestamp')] public ?string $lastRateLimitedTimestamp, #[\EventSauce\ObjectHydrator\MapFrom('last_request_timestamp')] public ?string $lastRequestTimestamp)
    {
    }
}
