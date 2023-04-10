<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics\GheStats;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Users
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_users":13,"admin_users":13,"suspended_users":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_users')] public ?int $totalUsers, #[\EventSauce\ObjectHydrator\MapFrom('admin_users')] public ?int $adminUsers, #[\EventSauce\ObjectHydrator\MapFrom('suspended_users')] public ?int $suspendedUsers)
    {
    }
}
