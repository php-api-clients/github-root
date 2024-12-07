<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6CEF235C\T04D453D8\TD14AACEB;

abstract readonly class T20BF342C implements \ApiClients\Client\GitHub\Contract\WorkflowRunUsage\Billable\Ubuntu
{
    const SCHEMA_JSON = '{
    "required": [
        "total_ms",
        "jobs"
    ],
    "type": "object",
    "properties": {
        "total_ms": {
            "type": "integer"
        },
        "jobs": {
            "type": "integer"
        },
        "job_runs": {
            "type": "array",
            "items": {
                "required": [
                    "job_id",
                    "duration_ms"
                ],
                "type": "object",
                "properties": {
                    "job_id": {
                        "type": "integer"
                    },
                    "duration_ms": {
                        "type": "integer"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "total_ms": 8,
    "jobs": 4,
    "job_runs": [
        {
            "job_id": 6,
            "duration_ms": 11
        },
        {
            "job_id": 6,
            "duration_ms": 11
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_ms')] public int $totalMs, public int $jobs, #[\EventSauce\ObjectHydrator\MapFrom('job_runs')] public ?array $jobRuns)
    {
    }
}
