<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class DismissalRequestSecretScanning
{
    public const SCHEMA_JSON         = '{
    "title": "Secret scanning alert dismissal request data",
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "secret_scanning_closure"
            ],
            "type": "string",
            "description": "The type of request"
        },
        "data": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "secret_type": {
                        "type": "string",
                        "description": "The type of secret that was detected"
                    },
                    "alert_number": {
                        "type": "string",
                        "description": "The number of the alert that was detected"
                    }
                }
            },
            "description": "The data related to the secret scanning alerts that have dismissal requests."
        }
    },
    "description": "Secret scanning alerts that have dismissal requests."
}';
    public const SCHEMA_TITLE        = 'Secret scanning alert dismissal request data';
    public const SCHEMA_DESCRIPTION  = 'Secret scanning alerts that have dismissal requests.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "secret_scanning_closure",
    "data": [
        {
            "secret_type": "generated",
            "alert_number": "generated"
        },
        {
            "secret_type": "generated",
            "alert_number": "generated"
        }
    ]
}';

    /**
     * type: The type of request
     * data: The data related to the secret scanning alerts that have dismissal requests.
     */
    public function __construct(public string|null $type, public array|null $data)
    {
    }
}
