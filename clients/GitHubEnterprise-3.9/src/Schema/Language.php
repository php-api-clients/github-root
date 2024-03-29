<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Language
{
    public const SCHEMA_JSON         = '{
    "title": "Language",
    "type": "object",
    "description": "Language",
    "additionalProperties": {
        "type": "integer"
    }
}';
    public const SCHEMA_TITLE        = 'Language';
    public const SCHEMA_DESCRIPTION  = 'Language';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
