<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DismissalRequestSecretScanningMetadata
{
    public const SCHEMA_JSON         = '{
    "title": "Secret scanning alert dismissal request metadata",
    "type": "object",
    "properties": {
        "alert_title": {
            "type": "string",
            "description": "The title of the secret alert"
        },
        "reason": {
            "enum": [
                "fixed_later",
                "false_positive",
                "tests",
                "revoked"
            ],
            "type": "string",
            "description": "The reason for the dismissal request"
        }
    },
    "description": "Metadata for a secret scanning alert dismissal request."
}';
    public const SCHEMA_TITLE        = 'Secret scanning alert dismissal request metadata';
    public const SCHEMA_DESCRIPTION  = 'Metadata for a secret scanning alert dismissal request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "alert_title": "generated",
    "reason": "revoked"
}';

    /**
     * alertTitle: The title of the secret alert
     * reason: The reason for the dismissal request
     */
    public function __construct(#[MapFrom('alert_title')]
    public string|null $alertTitle, public string|null $reason,)
    {
    }
}
