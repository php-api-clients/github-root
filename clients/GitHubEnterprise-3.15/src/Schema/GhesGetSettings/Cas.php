<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;

final readonly class Cas
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
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
    "url": "generated"
}';

    public function __construct(public string|null $url)
    {
    }
}
