<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob;

final readonly class Steps implements \ApiClients\Client\GitHub\Contract\WebhookWorkflowJobInProgress\WorkflowJob\Steps
{
    const SCHEMA_JSON = '{
    "title": "Workflow Step",
    "required": [
        "name",
        "status",
        "conclusion",
        "number",
        "started_at",
        "completed_at"
    ],
    "type": "object",
    "properties": {
        "completed_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "conclusion": {
            "enum": [
                "failure",
                "skipped",
                "success",
                null,
                "cancelled"
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "name": {
            "type": "string"
        },
        "number": {
            "type": "integer"
        },
        "started_at": {
            "type": [
                "string",
                "null"
            ]
        },
        "status": {
            "enum": [
                "in_progress",
                "completed",
                "queued",
                "pending"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "completed_at": "generated",
    "conclusion": "failure",
    "name": "generated",
    "number": 6,
    "started_at": "generated",
    "status": "in_progress"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, public string $name, public int $number, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public ?string $startedAt, public string $status)
    {
    }
}
