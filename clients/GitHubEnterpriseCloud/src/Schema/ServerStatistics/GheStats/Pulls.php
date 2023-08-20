<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Pulls
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_pulls": {
            "type": "integer"
        },
        "merged_pulls": {
            "type": "integer"
        },
        "mergeable_pulls": {
            "type": "integer"
        },
        "unmergeable_pulls": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_pulls": 11,
    "merged_pulls": 12,
    "mergeable_pulls": 15,
    "unmergeable_pulls": 17
}';

    public function __construct(#[MapFrom('total_pulls')]
    public int|null $totalPulls, #[MapFrom('merged_pulls')]
    public int|null $mergedPulls, #[MapFrom('mergeable_pulls')]
    public int|null $mergeablePulls, #[MapFrom('unmergeable_pulls')]
    public int|null $unmergeablePulls,)
    {
    }
}
