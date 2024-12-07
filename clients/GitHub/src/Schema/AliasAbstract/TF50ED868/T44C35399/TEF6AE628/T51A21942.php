<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF50ED868\T44C35399\TEF6AE628;

use ApiClients\Client\GitHub\Contract\BranchProtection\RequiredSignatures;

abstract readonly class T51A21942 implements RequiredSignatures
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
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"
            ]
        },
        "enabled": {
            "type": "boolean",
            "examples": [
                true
            ]
        }
    }
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
