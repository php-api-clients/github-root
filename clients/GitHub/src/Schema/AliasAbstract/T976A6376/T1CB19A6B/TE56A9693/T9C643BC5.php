<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T976A6376\T1CB19A6B\TE56A9693;

use ApiClients\Client\GitHub\Contract\WorkflowUsage\Billable\Ubuntu;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T9C643BC5 implements Ubuntu
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_ms": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_ms": 8
}';

    public function __construct(#[MapFrom('total_ms')]
    public int|null $totalMs,)
    {
    }
}
