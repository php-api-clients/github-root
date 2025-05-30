<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningAlertResolution
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "false_positive",
        "wont_fix",
        "revoked",
        "used_in_tests",
        null
    ],
    "type": [
        "string",
        "null"
    ],
    "description": "**Required when the `state` is `resolved`.** The reason for resolving the alert."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '**Required when the `state` is `resolved`.** The reason for resolving the alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
