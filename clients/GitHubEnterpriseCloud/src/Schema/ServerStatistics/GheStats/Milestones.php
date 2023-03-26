<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Milestones
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_milestones":13,"open_milestones":13,"closed_milestones":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_milestones')] public ?int $totalMilestones, #[\EventSauce\ObjectHydrator\MapFrom('open_milestones')] public ?int $openMilestones, #[\EventSauce\ObjectHydrator\MapFrom('closed_milestones')] public ?int $closedMilestones)
    {
    }
}
