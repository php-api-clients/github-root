<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CommitActivity implements \ApiClients\Client\GitHub\Contract\CommitActivity
{
    public const SCHEMA_JSON         = '{
    "title": "Commit Activity",
    "required": [
        "days",
        "total",
        "week"
    ],
    "type": "object",
    "properties": {
        "days": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "examples": [
                0,
                3,
                26,
                20,
                39,
                1,
                0
            ]
        },
        "total": {
            "type": "integer",
            "examples": [
                89
            ]
        },
        "week": {
            "type": "integer",
            "examples": [
                1336280400
            ]
        }
    },
    "description": "Commit Activity"
}';
    public const SCHEMA_TITLE        = 'Commit Activity';
    public const SCHEMA_DESCRIPTION  = 'Commit Activity';
    public const SCHEMA_EXAMPLE_DATA = '{
    "days": [
        5,
        6
    ],
    "total": 5,
    "week": 4
}';

    public function __construct(public array $days, public int $total, public int $week)
    {
    }
}
