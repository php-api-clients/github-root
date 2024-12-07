<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ReferrerTraffic implements \ApiClients\Client\GitHub\Contract\ReferrerTraffic
{
    public const SCHEMA_JSON         = '{
    "title": "Referrer Traffic",
    "required": [
        "referrer",
        "uniques",
        "count"
    ],
    "type": "object",
    "properties": {
        "referrer": {
            "type": "string",
            "examples": [
                "Google"
            ]
        },
        "count": {
            "type": "integer",
            "examples": [
                4
            ]
        },
        "uniques": {
            "type": "integer",
            "examples": [
                3
            ]
        }
    },
    "description": "Referrer Traffic"
}';
    public const SCHEMA_TITLE        = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION  = 'Referrer Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{
    "referrer": "generated",
    "count": 5,
    "uniques": 7
}';

    public function __construct(public string $referrer, public int $count, public int $uniques)
    {
    }
}
