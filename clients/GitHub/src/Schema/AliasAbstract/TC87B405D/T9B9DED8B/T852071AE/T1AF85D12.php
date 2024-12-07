<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TC87B405D\T9B9DED8B\T852071AE;

use ApiClients\Client\GitHub\Contract\Issues\Create\Request\ApplicationJson\Labels\One;

abstract readonly class T1AF85D12 implements One
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "color": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "description": "generated",
    "color": "generated"
}';

    public function __construct(public int|null $id, public string|null $name, public string|null $description, public string|null $color)
    {
    }
}
