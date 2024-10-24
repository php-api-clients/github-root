<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranch;

final readonly class EnforceAdmins
{
    public const SCHEMA_JSON         = '{
    "required": [
        "url",
        "enabled"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "enabled": {
            "type": "boolean"
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "enabled": false
}';

    public function __construct(public string $url, public bool $enabled)
    {
    }
}
