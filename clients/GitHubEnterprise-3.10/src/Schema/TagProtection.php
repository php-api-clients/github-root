<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class TagProtection
{
    public const SCHEMA_JSON         = '{
    "title": "Tag protection",
    "required": [
        "pattern"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "created_at": {
            "type": "string",
            "examples": [
                "2011-01-26T19:01:12Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "examples": [
                "2011-01-26T19:01:12Z"
            ]
        },
        "enabled": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "pattern": {
            "type": "string",
            "examples": [
                "v1.*"
            ]
        }
    },
    "description": "Tag protection"
}';
    public const SCHEMA_TITLE        = 'Tag protection';
    public const SCHEMA_DESCRIPTION  = 'Tag protection';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "created_at": "2011-01-26T19:01:12Z",
    "updated_at": "2011-01-26T19:01:12Z",
    "enabled": true,
    "pattern": "v1.*"
}';

    public function __construct(public int|null $id, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public bool|null $enabled, public string $pattern,)
    {
    }
}
