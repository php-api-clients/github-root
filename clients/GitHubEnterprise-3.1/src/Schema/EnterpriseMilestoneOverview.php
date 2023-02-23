<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseMilestoneOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Milestone Stats","required":["total_milestones","open_milestones","closed_milestones"],"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Milestone Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_milestones":13,"open_milestones":13,"closed_milestones":13}';
    public ?int $total_milestones;
    public ?int $open_milestones;
    public ?int $closed_milestones;
    public function __construct(int $total_milestones, int $open_milestones, int $closed_milestones)
    {
        $this->total_milestones = $total_milestones;
        $this->open_milestones = $open_milestones;
        $this->closed_milestones = $closed_milestones;
    }
}
