<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class CodeScanningAlertDismissedReason
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "false positive",
        "won\'t fix",
        "used in tests",
        null
    ],
    "type": [
        "string",
        "null"
    ],
    "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '**Required when the state is dismissed.** The reason for dismissing or closing the alert.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
