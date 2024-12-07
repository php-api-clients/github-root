<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowUsage;

final readonly class Billable implements \ApiClients\Client\GitHub\Contract\WorkflowUsage\Billable
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
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
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('UBUNTU')] public ?\ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Ubuntu $ubuntu, #[\EventSauce\ObjectHydrator\MapFrom('MACOS')] public ?\ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Macos $macos, #[\EventSauce\ObjectHydrator\MapFrom('WINDOWS')] public ?\ApiClients\Client\GitHub\Schema\WorkflowUsage\Billable\Windows $windows)
    {
    }
}
