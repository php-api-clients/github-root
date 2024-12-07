<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T382BF337\TB6C2B5A9\TD89D0676;

use ApiClients\Client\GitHub\Contract\WebhookCodeScanningAlertAppearedInBranch\Alert\Tool;

abstract readonly class T80A33F9B implements Tool
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "version"
    ],
    "type": "object",
    "properties": {
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
    "name": "generated",
    "version": "generated"
}';

    /**
     * name: The name of the tool used to generate the code scanning analysis alert.
     * version: The version of the tool used to detect the alert.
     */
    public function __construct(public string $name, public string|null $version)
    {
    }
}
