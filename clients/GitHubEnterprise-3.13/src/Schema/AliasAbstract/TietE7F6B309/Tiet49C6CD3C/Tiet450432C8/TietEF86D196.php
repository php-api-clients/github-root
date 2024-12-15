<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietE7F6B309\Tiet49C6CD3C\Tiet450432C8;

abstract readonly class TietEF86D196
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        },
        "tileserver": {
            "type": [
                "string",
                "null"
            ]
        },
        "basemap": {
            "type": "string"
        },
        "token": {
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
    "enabled": false,
    "tileserver": "generated",
    "basemap": "generated",
    "token": "generated"
}';

    public function __construct(public bool|null $enabled, public string|null $tileserver, public string|null $basemap, public string|null $token)
    {
    }
}
