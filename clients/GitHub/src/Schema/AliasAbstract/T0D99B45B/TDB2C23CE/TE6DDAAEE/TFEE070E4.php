<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0D99B45B\TDB2C23CE\TE6DDAAEE;

use ApiClients\Client\GitHub\Contract\WorkflowRunUsage\Billable\Ubuntu\JobRuns;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TFEE070E4 implements JobRuns
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "job_id": 6,
    "duration_ms": 11
}';

    public function __construct(#[MapFrom('job_id')]
    public int $jobId, #[MapFrom('duration_ms')]
    public int $durationMs,)
    {
    }
}
