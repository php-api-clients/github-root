<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet5D631EDF\TietBCC1E5F1\Tiet62A19183;

abstract readonly class TietBC9A2F0A
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        },
        "uri": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "uri": "generated"
}';

    public function __construct(public bool|null $enabled, public string|null $uri)
    {
    }
}
