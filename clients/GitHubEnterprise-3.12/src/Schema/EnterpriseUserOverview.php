<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseUserOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Enterprise User Stats",
    "required": [
        "total_users",
        "admin_users",
        "suspended_users"
    ],
    "type": "object",
    "properties": {
        "total_users": {
            "type": "integer"
        },
        "admin_users": {
            "type": "integer"
        },
        "suspended_users": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Enterprise User Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_users": 11,
    "admin_users": 11,
    "suspended_users": 15
}';

    public function __construct(#[MapFrom('total_users')]
    public int $totalUsers, #[MapFrom('admin_users')]
    public int $adminUsers, #[MapFrom('suspended_users')]
    public int $suspendedUsers,)
    {
    }
}
