<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietF71405B1\Tiet858A5095\Tiet77E03F50;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietEFE21D34
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "runners"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "number"
        },
        "runners": {
            "type": "array",
            "items": {
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
                        "description": "The ID of the runner.",
                        "examples": [
                            5
                        ]
                    },
                    "runner_group_id": {
                        "type": "integer",
                        "description": "The ID of the runner group.",
                        "examples": [
                            1
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
                    },
                    "ephemeral": {
                        "type": "boolean"
                    }
                },
                "description": "A self hosted runner"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 1.1,
    "runners": [
        {
            "id": 5,
            "runner_group_id": 1,
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
            ],
            "ephemeral": false
        },
        {
            "id": 5,
            "runner_group_id": 1,
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
            ],
            "ephemeral": false
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int|float $totalCount, public array $runners,)
    {
    }
}
