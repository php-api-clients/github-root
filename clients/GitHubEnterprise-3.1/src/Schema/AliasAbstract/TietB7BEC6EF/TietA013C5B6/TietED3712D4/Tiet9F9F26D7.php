<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietB7BEC6EF\TietA013C5B6\TietED3712D4;

abstract readonly class Tiet9F9F26D7
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "contexts"
            ],
            "type": "object",
            "properties": {
                "contexts": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "contexts parameter"
                }
            },
            "example": {
                "contexts": [
                    "contexts"
                ]
            }
        },
        {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "contexts parameter"
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
