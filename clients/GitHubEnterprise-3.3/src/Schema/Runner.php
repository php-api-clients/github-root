<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Runner
{
    public const SCHEMA_JSON         = '{
    "title": "Self hosted runners",
    "required": [
        "id",
        "name",
        "os",
        "status",
        "busy",
        "labels"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The id of the runner.",
            "examples": [
                5
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the runner.",
            "examples": [
                "iMac"
            ]
        },
        "os": {
            "type": "string",
            "description": "The Operating System of the runner.",
            "examples": [
                "macos"
            ]
        },
        "status": {
            "type": "string",
            "description": "The status of the runner.",
            "examples": [
                "online"
            ]
        },
        "busy": {
            "type": "boolean"
        },
        "labels": {
            "type": "array",
            "items": {
                "title": "Self hosted runner label",
                "required": [
                    "name"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "Unique identifier of the label."
                    },
                    "name": {
                        "type": "string",
                        "description": "Name of the label."
                    },
                    "type": {
                        "enum": [
                            "read-only",
                            "custom"
                        ],
                        "type": "string",
                        "description": "The type of label. Read-only labels are applied automatically when the runner is configured."
                    }
                },
                "description": "A label for a self hosted runner"
            }
        }
    },
    "description": "A self hosted runner"
}';
    public const SCHEMA_TITLE        = 'Self hosted runners';
    public const SCHEMA_DESCRIPTION  = 'A self hosted runner';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 5,
    "name": "iMac",
    "os": "macos",
    "status": "online",
    "busy": false,
    "labels": [
        {
            "id": 2,
            "name": "generated",
            "type": "custom"
        },
        {
            "id": 2,
            "name": "generated",
            "type": "custom"
        }
    ]
}';

    /**
     * id: The id of the runner.
     * name: The name of the runner.
     * os: The Operating System of the runner.
     * status: The status of the runner.
     */
    public function __construct(public int $id, public string $name, public string $os, public string $status, public bool $busy, public array $labels)
    {
    }
}
