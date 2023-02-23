<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Hooks
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_hooks":{"type":"integer"},"active_hooks":{"type":"integer"},"inactive_hooks":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
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
