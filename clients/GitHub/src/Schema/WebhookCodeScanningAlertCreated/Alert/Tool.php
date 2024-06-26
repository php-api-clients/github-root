<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCodeScanningAlertCreated\Alert;

final readonly class Tool
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "version"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "guid": {
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the tool used to generate the code scanning analysis alert."
        },
        "version": {
            "type": [
                "string",
                "null"
            ],
            "description": "The version of the tool used to detect the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "guid": "generated",
    "name": "generated",
    "version": "generated"
}';

    /**
     * name: The name of the tool used to generate the code scanning analysis alert.
     * version: The version of the tool used to detect the alert.
     */
    public function __construct(public string|null $guid, public string $name, public string|null $version)
    {
    }
}
