<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T5229E490\T0081962F\T31CBB446;

use ApiClients\Client\GitHub\Contract\SubIssuesSummary;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TE4F4DE72 implements SubIssuesSummary
{
    public const SCHEMA_JSON         = '{
    "title": "Sub-issues Summary",
    "required": [
        "total",
        "completed",
        "percent_completed"
    ],
    "type": "object",
    "properties": {
        "total": {
            "type": "integer"
        },
        "completed": {
            "type": "integer"
        },
        "percent_completed": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Sub-issues Summary';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total": 5,
    "completed": 9,
    "percent_completed": 17
}';

    public function __construct(public int $total, public int $completed, #[MapFrom('percent_completed')]
    public int $percentCompleted,)
    {
    }
}
