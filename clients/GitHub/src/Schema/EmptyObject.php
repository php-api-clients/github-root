<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class EmptyObject
{
    public const SCHEMA_JSON         = '{
    "title": "Empty Object",
    "type": "object",
    "properties": {},
    "description": "An object without any properties.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = 'Empty Object';
    public const SCHEMA_DESCRIPTION  = 'An object without any properties.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
