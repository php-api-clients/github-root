<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleCommitStatus
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Commit Status",
    "required": [
        "description",
        "id",
        "node_id",
        "state",
        "context",
        "target_url",
        "avatar_url",
        "url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "state": {
            "type": "string"
        },
        "context": {
            "type": "string"
        },
        "target_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "required": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "avatar_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "description": "generated",
    "id": 2,
    "node_id": "generated",
    "state": "generated",
    "context": "generated",
    "target_url": "https:\\/\\/example.com\\/",
    "required": false,
    "avatar_url": "https:\\/\\/example.com\\/",
    "url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    public function __construct(public string|null $description, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $state, public string $context, #[MapFrom('target_url')]
    public string|null $targetUrl, public bool|null $required, #[MapFrom('avatar_url')]
    public string|null $avatarUrl, public string $url, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
