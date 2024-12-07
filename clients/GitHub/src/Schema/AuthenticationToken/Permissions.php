<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AuthenticationToken;

final readonly class Permissions implements \ApiClients\Client\GitHub\Contract\AuthenticationToken\Permissions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "examples": [
        {
            "issues": "read",
            "deployments": "write"
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
