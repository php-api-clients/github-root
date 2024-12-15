<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet24EF2936\TietEAFA0BCE\Tiet793B6F99;

abstract readonly class Tiet7E8E253E
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        },
        "community": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "community": "generated"
}';

    public function __construct(public bool|null $enabled, public string|null $community)
    {
    }
}
