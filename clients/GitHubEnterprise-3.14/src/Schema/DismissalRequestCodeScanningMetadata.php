<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DismissalRequestCodeScanningMetadata
{
    public const SCHEMA_JSON         = '{
    "title": "Code scanning alert dismissal request metadata",
    "type": "object",
    "properties": {
        "alert_title": {
            "type": "string",
            "description": "The title of the code scanning alert"
        },
        "reason": {
            "enum": [
                "false positive",
                "won\'t fix",
                "used in tests"
            ],
            "type": "string",
            "description": "The reason for the dismissal request"
        }
    },
    "description": "Metadata for a code scanning alert dismissal request."
}';
    public const SCHEMA_TITLE        = 'Code scanning alert dismissal request metadata';
    public const SCHEMA_DESCRIPTION  = 'Metadata for a code scanning alert dismissal request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "alert_title": "generated",
    "reason": "used in tests"
}';

    /**
     * alertTitle: The title of the code scanning alert
     * reason: The reason for the dismissal request
     */
    public function __construct(#[MapFrom('alert_title')]
    public string|null $alertTitle, public string|null $reason,)
    {
    }
}
