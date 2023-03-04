<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseUserOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise User Stats","required":["total_users","admin_users","suspended_users"],"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise User Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_users":13,"admin_users":13,"suspended_users":13}';
    public ?int $total_users;
    public ?int $admin_users;
    public ?int $suspended_users;
    public function __construct(int $total_users, int $admin_users, int $suspended_users)
    {
        $this->total_users = $total_users;
        $this->admin_users = $admin_users;
        $this->suspended_users = $suspended_users;
    }
}
