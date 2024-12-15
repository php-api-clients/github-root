<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesClusterStatusIndicator
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "UNKNOWN",
        "OK",
        "WARNING",
        "CRITICAL"
    ],
    "type": "string"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
