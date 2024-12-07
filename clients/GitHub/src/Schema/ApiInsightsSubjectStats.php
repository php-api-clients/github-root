<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class ApiInsightsSubjectStats implements \ApiClients\Client\GitHub\Contract\ApiInsightsSubjectStats
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "subject_type": {
            "type": "string"
        },
        "subject_name": {
            "type": "string"
        },
        "subject_id": {
            "type": "integer",
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
    "subject_type": "generated",
    "subject_name": "generated",
    "subject_id": 10,
    "total_request_count": 19,
    "rate_limited_request_count": 26,
    "last_rate_limited_timestamp": "generated",
    "last_request_timestamp": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('subject_type')] public ?string $subjectType, #[\EventSauce\ObjectHydrator\MapFrom('subject_name')] public ?string $subjectName, #[\EventSauce\ObjectHydrator\MapFrom('subject_id')] public ?int $subjectId, #[\EventSauce\ObjectHydrator\MapFrom('total_request_count')] public ?int $totalRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('rate_limited_request_count')] public ?int $rateLimitedRequestCount, #[\EventSauce\ObjectHydrator\MapFrom('last_rate_limited_timestamp')] public ?string $lastRateLimitedTimestamp, #[\EventSauce\ObjectHydrator\MapFrom('last_request_timestamp')] public ?string $lastRequestTimestamp)
    {
    }
}
