<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesChecksSystemRequirements;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Nodes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "hostname": {
            "type": "string"
        },
        "status": {
            "enum": [
                "OK",
                "FAILED"
            ],
            "type": "string"
        },
        "roles_status": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "status": {
                        "enum": [
                            "OK",
                            "FAILED"
                        ],
                        "type": "string"
                    },
                    "role": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "hostname": "generated",
    "status": "FAILED",
    "roles_status": [
        {
            "status": "FAILED",
            "role": "generated"
        },
        {
            "status": "FAILED",
            "role": "generated"
        }
    ]
}';

    public function __construct(public string|null $hostname, public string|null $status, #[MapFrom('roles_status')]
    public array|null $rolesStatus,)
    {
    }
}
