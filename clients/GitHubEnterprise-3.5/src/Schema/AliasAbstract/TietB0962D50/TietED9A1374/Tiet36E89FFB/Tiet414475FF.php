<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietB0962D50\TietED9A1374\Tiet36E89FFB;

abstract readonly class Tiet414475FF
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "errors": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "resource": {
                        "type": "string"
                    },
                    "code": {
                        "type": "string"
                    },
                    "message": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "errors": [
        {
            "resource": "generated",
            "code": "generated",
            "message": "generated"
        },
        {
            "resource": "generated",
            "code": "generated",
            "message": "generated"
        }
    ]
}';

    public function __construct(public string|null $message, public array|null $errors)
    {
    }
}
