<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Users
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_users":13,"admin_users":13,"suspended_users":13}';

    public function __construct(#[MapFrom('total_users')] public ?int $totalUsers, #[MapFrom('admin_users')] public ?int $adminUsers, #[MapFrom('suspended_users')] public ?int $suspendedUsers)
    {
    }
}
