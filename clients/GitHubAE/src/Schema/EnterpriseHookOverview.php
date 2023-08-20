<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseHookOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Hooks Enterprise Stats",
    "required": [
        "total_hooks",
        "active_hooks",
        "inactive_hooks"
    ],
    "type": "object",
    "properties": {
        "total_hooks": {
            "type": "integer"
        },
        "active_hooks": {
            "type": "integer"
        },
        "inactive_hooks": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Hooks Enterprise Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_hooks": 11,
    "active_hooks": 12,
    "inactive_hooks": 14
}';

    public function __construct(#[MapFrom('total_hooks')]
    public int $totalHooks, #[MapFrom('active_hooks')]
    public int $activeHooks, #[MapFrom('inactive_hooks')]
    public int $inactiveHooks,)
    {
    }
}
