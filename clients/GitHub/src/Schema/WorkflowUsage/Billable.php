<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WorkflowUsage;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Billable
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "UBUNTU": {
        "total_ms": 8
    },
    "MACOS": {
        "total_ms": 8
    },
    "WINDOWS": {
        "total_ms": 8
    }
}';

    public function __construct(#[MapFrom('UBUNTU')]
    public Schema\WorkflowUsage\Billable\Ubuntu|null $ubuntu, #[MapFrom('MACOS')]
    public Schema\WorkflowUsage\Billable\Macos|null $macos, #[MapFrom('WINDOWS')]
    public Schema\WorkflowUsage\Billable\Windows|null $windows,)
    {
    }
}
