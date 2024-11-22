<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GetAuditLogStreamConfigs
{
    public const SCHEMA_JSON         = '{
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
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "stream_type": "generated",
    "stream_details": "generated",
    "enabled": false,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "paused_at": "1970-01-01T00:00:00+00:00"
}';

    public function __construct(public int|null $id, #[MapFrom('stream_type')]
    public string|null $streamType, #[MapFrom('stream_details')]
    public string|null $streamDetails, public bool|null $enabled, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('paused_at')]
    public string|null $pausedAt,)
    {
    }
}
