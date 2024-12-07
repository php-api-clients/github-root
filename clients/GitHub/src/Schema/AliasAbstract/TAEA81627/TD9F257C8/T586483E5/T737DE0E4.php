<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TAEA81627\TD9F257C8\T586483E5;

abstract readonly class T737DE0E4 implements \ApiClients\Client\GitHub\Contract\ProtectedBranch\RequiredLinearHistory
{
    const SCHEMA_JSON = '{
    "required": [
        "enabled"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false
}';
    public function __construct(public bool $enabled)
    {
    }
}
