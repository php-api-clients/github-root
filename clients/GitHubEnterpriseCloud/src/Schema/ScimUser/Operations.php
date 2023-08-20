<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

use ApiClients\Client\GitHubEnterpriseCloud\Attribute\CastUnionToType\Schema\ScimUser\Operations\Value;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class Operations
{
    public const SCHEMA_JSON         = '{
    "required": [
        "op"
    ],
    "type": "object",
    "properties": {
        "op": {
            "enum": [
                "add",
                "remove",
                "replace"
            ],
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "value": {
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                },
                {
                    "type": "array",
                    "items": {}
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "op": "replace",
    "path": "generated",
    "value": null
}';

    public function __construct(public string $op, public string|null $path, #[Value]
    public string|Schema\ScimUser\Operations\Value\One|array|null $value,)
    {
    }
}
