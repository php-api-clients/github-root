<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TC87B405D\T9B9DED8B\T852071AE;

abstract readonly class T1AF85D12 implements \ApiClients\Client\GitHub\Contract\Issues\Create\Request\ApplicationJson\Labels\One
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "description": "generated",
    "color": "generated"
}';
    public function __construct(public ?int $id, public ?string $name, public ?string $description, public ?string $color)
    {
    }
}
