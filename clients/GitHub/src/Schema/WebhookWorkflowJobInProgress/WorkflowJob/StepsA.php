<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob;

final readonly class StepsA implements \ApiClients\Client\GitHub\Contract\WebhookWorkflowJobInProgress\WorkflowJob\StepsA
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
                "pending",
                "queued"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "completed_at": "generated",
    "conclusion": "generated",
    "name": "generated",
    "number": 6,
    "started_at": "generated",
    "status": "in_progress"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, public string $name, public int $number, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public ?string $startedAt, public string $status)
    {
    }
}
