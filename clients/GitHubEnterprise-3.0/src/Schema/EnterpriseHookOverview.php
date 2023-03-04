<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseHookOverview
{
    public const SCHEMA_JSON = '{"title":"Hooks Enterprise Stats","required":["total_hooks","active_hooks","inactive_hooks"],"type":"object","properties":{"total_hooks":{"type":"integer"},"active_hooks":{"type":"integer"},"inactive_hooks":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Hooks Enterprise Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_hooks":13,"active_hooks":13,"inactive_hooks":13}';
    public ?int $total_hooks;
    public ?int $active_hooks;
    public ?int $inactive_hooks;
    public function __construct(int $total_hooks, int $active_hooks, int $inactive_hooks)
    {
        $this->total_hooks = $total_hooks;
        $this->active_hooks = $active_hooks;
        $this->inactive_hooks = $inactive_hooks;
    }
}
