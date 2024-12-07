<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T64B7D8F9\TB1B1693D\T6F7EB3E9;

use ApiClients\Client\GitHub\Contract\PageBuild\Error;

abstract readonly class T2C64727B implements Error
{
    public const SCHEMA_JSON         = '{
    "required": [
        "message"
    ],
    "type": "object",
    "properties": {
        "message": {
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
    "message": "generated"
}';

    public function __construct(public string|null $message)
    {
    }
}
