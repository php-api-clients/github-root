<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ExemptionRequestSecretScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "secret_type": {
            "type": "string",
            "description": "The type of secret that was detected"
        },
        "locations": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "commit": {
                        "type": "string",
                        "description": "The commit SHA where the secret was detected"
                    },
                    "branch": {
                        "type": "string",
                        "description": "The branch where the secret was detected"
                    },
                    "path": {
                        "type": "string",
                        "description": "The path of the file where the secret was detected"
                    }
                }
            },
            "description": "The location data of the secret that was detected"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "secret_type": "generated",
    "locations": [
        {
            "commit": "generated",
            "branch": "generated",
            "path": "generated"
        },
        {
            "commit": "generated",
            "branch": "generated",
            "path": "generated"
        }
    ]
}';

    /**
     * secretType: The type of secret that was detected
     * locations: The location data of the secret that was detected
     */
    public function __construct(#[MapFrom('secret_type')]
    public string|null $secretType, public array|null $locations,)
    {
    }
}
