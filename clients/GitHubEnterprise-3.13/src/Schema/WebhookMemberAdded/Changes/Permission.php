<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookMemberAdded\Changes;

final readonly class Permission
{
    public const SCHEMA_JSON         = '{
    "required": [
        "to"
    ],
    "type": "object",
    "properties": {
        "to": {
            "enum": [
                "write",
                "admin",
                "read"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "to": "read"
}';

    public function __construct(public string $to)
    {
    }
}
