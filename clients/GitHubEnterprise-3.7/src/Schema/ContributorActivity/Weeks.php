<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ContributorActivity;

final readonly class Weeks
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "w": {
            "type": "integer"
        },
        "a": {
            "type": "integer"
        },
        "d": {
            "type": "integer"
        },
        "c": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "w": 1,
    "a": 1,
    "d": 1,
    "c": 1
}';

    public function __construct(public int|null $w, public int|null $a, public int|null $d, public int|null $c)
    {
    }
}
