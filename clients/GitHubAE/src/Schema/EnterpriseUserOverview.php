<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class EnterpriseUserOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise User Stats","required":["total_users","admin_users","suspended_users"],"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise User Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_users":13,"admin_users":13,"suspended_users":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_users')] public int $totalUsers, #[\EventSauce\ObjectHydrator\MapFrom('admin_users')] public int $adminUsers, #[\EventSauce\ObjectHydrator\MapFrom('suspended_users')] public int $suspendedUsers)
    {
    }
}
