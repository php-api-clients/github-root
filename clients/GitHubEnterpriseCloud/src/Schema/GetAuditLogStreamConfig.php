<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GetAuditLogStreamConfig
{
    public const SCHEMA_JSON         = '{
    "title": "Get an audit log streaming configuration",
    "required": [
        "id",
        "stream_type",
        "stream_details",
        "enabled",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "stream_type": {
            "type": "string"
        },
        "stream_details": {
            "type": "string"
        },
        "enabled": {
            "type": "boolean"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "paused_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        }
    },
    "description": "Get an audit log streaming configuration for an enterprise."
}';
    public const SCHEMA_TITLE        = 'Get an audit log streaming configuration';
    public const SCHEMA_DESCRIPTION  = 'Get an audit log streaming configuration for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "stream_type": "generated",
    "stream_details": "generated",
    "enabled": false,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "paused_at": "1970-01-01T00:00:00+00:00"
}';

    public function __construct(public int $id, #[MapFrom('stream_type')]
    public string $streamType, #[MapFrom('stream_details')]
    public string $streamDetails, public bool $enabled, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('paused_at')]
    public string|null $pausedAt,)
    {
    }
}
