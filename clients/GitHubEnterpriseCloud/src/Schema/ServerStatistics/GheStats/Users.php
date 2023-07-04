<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Users
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_users":11,"admin_users":11,"suspended_users":15}';

    public function __construct(#[MapFrom('total_users')]
    public int|null $totalUsers, #[MapFrom('admin_users')]
    public int|null $adminUsers, #[MapFrom('suspended_users')]
    public int|null $suspendedUsers,)
    {
    }
}
