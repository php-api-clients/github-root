<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesChecksSystemRequirements
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "OK",
                "FAILED"
            ],
            "type": "string"
        },
        "nodes": {
            "type": "array",
            "items": {
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
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "FAILED",
    "nodes": [
        {
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
        },
        {
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
        }
    ]
}';

    public function __construct(public string|null $status, public array|null $nodes)
    {
    }
}
