<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class Language implements \ApiClients\Client\GitHub\Contract\Language
{
    const SCHEMA_JSON = '{
    "title": "Language",
    "type": "object",
    "description": "Language",
    "additionalProperties": {
        "type": "integer"
    }
}';
    public const SCHEMA_TITLE = 'Language';
    public const SCHEMA_DESCRIPTION = 'Language';
    const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
