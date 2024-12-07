<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class ReactionRollup implements \ApiClients\Client\GitHub\Contract\ReactionRollup
{
    const SCHEMA_JSON = '{
    "title": "Reaction Rollup",
    "required": [
        "url",
        "total_count",
        "+1",
        "-1",
        "laugh",
        "confused",
        "heart",
        "hooray",
        "eyes",
        "rocket"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "total_count": {
            "type": "integer"
        },
        "+1": {
            "type": "integer"
        },
        "-1": {
            "type": "integer"
        },
        "laugh": {
            "type": "integer"
        },
        "confused": {
            "type": "integer"
        },
        "heart": {
            "type": "integer"
        },
        "hooray": {
            "type": "integer"
        },
        "eyes": {
            "type": "integer"
        },
        "rocket": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE = 'Reaction Rollup';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "total_count": 11,
    "+1": 11,
    "-1": 10,
    "laugh": 5,
    "confused": 8,
    "heart": 5,
    "hooray": 6,
    "eyes": 4,
    "rocket": 6
}';
    public function __construct(public string $url, #[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\MapFrom('+1')] public int $plusOne, #[\EventSauce\ObjectHydrator\MapFrom('-1')] public int $minOne, public int $laugh, public int $confused, public int $heart, public int $hooray, public int $eyes, public int $rocket)
    {
    }
}
