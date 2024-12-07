<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class ApiInsightsTimeStats implements \ApiClients\Client\GitHub\Contract\ApiInsightsTimeStats
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "timestamp": {
            "type": "string"
        },
        "total_request_count": {
            "type": "integer",
            "format": "int64"
        },
        "rate_limited_request_count": {
            "type": "integer",
            "format": "int64"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "timestamp": "generated",
    "total_request_count": 19,
    "rate_limited_request_count": 26
}';
    public function __construct(public ?string $timestamp, #[\EventSauce\ObjectHydrator\MapFrom('total_request_count')] public ?int $totalRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('rate_limited_request_count')] public ?int $rateLimitedRequestCount)
    {
    }
}
