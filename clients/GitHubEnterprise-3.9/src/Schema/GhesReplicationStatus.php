<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesReplicationStatus
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "UNKNOWN",
                "OK",
                "WARNING",
                "CRITICAL"
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
                            "UNKNOWN",
                            "OK",
                            "WARNING",
                            "CRITICAL"
                        ],
                        "type": "string"
                    },
                    "services": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "enum": [
                                        "UNKNOWN",
                                        "OK",
                                        "WARNING",
                                        "CRITICAL"
                                    ],
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "details": {
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
    "status": "CRITICAL",
    "nodes": [
        {
            "hostname": "generated",
            "status": "CRITICAL",
            "services": [
                {
                    "status": "CRITICAL",
                    "name": "generated",
                    "details": "generated"
                },
                {
                    "status": "CRITICAL",
                    "name": "generated",
                    "details": "generated"
                }
            ]
        },
        {
            "hostname": "generated",
            "status": "CRITICAL",
            "services": [
                {
                    "status": "CRITICAL",
                    "name": "generated",
                    "details": "generated"
                },
                {
                    "status": "CRITICAL",
                    "name": "generated",
                    "details": "generated"
                }
            ]
        }
    ]
}';

    public function __construct(public string|null $status, public array|null $nodes)
    {
    }
}
