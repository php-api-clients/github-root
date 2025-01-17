<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietEFA9F043\Tiet85CCFBAD\Tiet6B6919FC;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet23014603
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "platforms"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "platforms": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "platforms": [
        "generated",
        "generated"
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $platforms,)
    {
    }
}
