<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class WorkflowUsage
{
    public const SCHEMA_JSON         = '{
    "title": "Workflow Usage",
    "required": [
        "billable"
    ],
    "type": "object",
    "properties": {
        "billable": {
            "type": "object",
            "properties": {
                "UBUNTU": {
                    "type": "object",
                    "properties": {
                        "total_ms": {
                            "type": "integer"
                        }
                    }
                },
                "MACOS": {
                    "type": "object",
                    "properties": {
                        "total_ms": {
                            "type": "integer"
                        }
                    }
                },
                "WINDOWS": {
                    "type": "object",
                    "properties": {
                        "total_ms": {
                            "type": "integer"
                        }
                    }
                }
            }
        }
    },
    "description": "Workflow Usage"
}';
    public const SCHEMA_TITLE        = 'Workflow Usage';
    public const SCHEMA_DESCRIPTION  = 'Workflow Usage';
    public const SCHEMA_EXAMPLE_DATA = '{
    "billable": {
        "UBUNTU": {
            "total_ms": 8
        },
        "MACOS": {
            "total_ms": 8
        },
        "WINDOWS": {
            "total_ms": 8
        }
    }
}';

    public function __construct(public Schema\WorkflowUsage\Billable $billable)
    {
    }
}
