<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class DismissalRequestCodeScanning
{
    public const SCHEMA_JSON         = '{
    "title": "Code scanning alert dismissal request data",
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "code_scanning_alert_dismissal"
            ],
            "type": "string",
            "description": "The type of request"
        },
        "data": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "alert_number": {
                        "type": "string",
                        "description": "The number of the alert to be dismissed"
                    }
                }
            },
            "description": "The data related to the code scanning alerts that have dismissal requests."
        }
    },
    "description": "Code scanning alerts that have dismissal requests."
}';
    public const SCHEMA_TITLE        = 'Code scanning alert dismissal request data';
    public const SCHEMA_DESCRIPTION  = 'Code scanning alerts that have dismissal requests.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "code_scanning_alert_dismissal",
    "data": [
        {
            "alert_number": "generated"
        },
        {
            "alert_number": "generated"
        }
    ]
}';

    /**
     * type: The type of request
     * data: The data related to the code scanning alerts that have dismissal requests.
     */
    public function __construct(public string|null $type, public array|null $data)
    {
    }
}
