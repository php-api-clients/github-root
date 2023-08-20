<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterprisePullRequestOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise Pull Request Stats",
    "required": [
        "total_pulls",
        "merged_pulls",
        "mergeable_pulls",
        "unmergeable_pulls"
    ],
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
    public const SCHEMA_TITLE        = 'Enterprise Pull Request Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_pulls": 11,
    "merged_pulls": 12,
    "mergeable_pulls": 15,
    "unmergeable_pulls": 17
}';

    public function __construct(#[MapFrom('total_pulls')]
    public int $totalPulls, #[MapFrom('merged_pulls')]
    public int $mergedPulls, #[MapFrom('mergeable_pulls')]
    public int $mergeablePulls, #[MapFrom('unmergeable_pulls')]
    public int $unmergeablePulls,)
    {
    }
}
