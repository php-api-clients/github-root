<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesChecksSystemRequirements\Nodes;

final readonly class RolesStatus
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "OK",
                "FAILED"
            ],
            "type": "string"
        },
        "role": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "FAILED",
    "role": "generated"
}';

    public function __construct(public string|null $status, public string|null $role)
    {
    }
}
