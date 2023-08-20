<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Repos
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_repos": {
            "type": "integer"
        },
        "root_repos": {
            "type": "integer"
        },
        "fork_repos": {
            "type": "integer"
        },
        "org_repos": {
            "type": "integer"
        },
        "total_pushes": {
            "type": "integer"
        },
        "total_wikis": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_repos": 11,
    "root_repos": 10,
    "fork_repos": 10,
    "org_repos": 9,
    "total_pushes": 12,
    "total_wikis": 11
}';

    public function __construct(#[MapFrom('total_repos')]
    public int|null $totalRepos, #[MapFrom('root_repos')]
    public int|null $rootRepos, #[MapFrom('fork_repos')]
    public int|null $forkRepos, #[MapFrom('org_repos')]
    public int|null $orgRepos, #[MapFrom('total_pushes')]
    public int|null $totalPushes, #[MapFrom('total_wikis')]
    public int|null $totalWikis,)
    {
    }
}
