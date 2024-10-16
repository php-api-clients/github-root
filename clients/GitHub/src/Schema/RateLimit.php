<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RateLimit
{
    public const SCHEMA_JSON         = '{
    "title": "Rate Limit",
    "required": [
        "limit",
        "remaining",
        "reset",
        "used"
    ],
    "type": "object",
    "properties": {
        "limit": {
            "type": "integer"
        },
        "remaining": {
            "type": "integer"
        },
        "reset": {
            "type": "integer"
        },
        "used": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Rate Limit';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "limit": 5,
    "remaining": 9,
    "reset": 5,
    "used": 4
}';

    public function __construct(public int $limit, public int $remaining, public int $reset, public int $used)
    {
    }
}
