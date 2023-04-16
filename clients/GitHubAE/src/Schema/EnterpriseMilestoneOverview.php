<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseMilestoneOverview
{
    public const SCHEMA_JSON         = '{"title":"Enterprise Milestone Stats","required":["total_milestones","open_milestones","closed_milestones"],"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = 'Enterprise Milestone Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_milestones":13,"open_milestones":13,"closed_milestones":13}';

    public function __construct(#[MapFrom('total_milestones')] public int $totalMilestones, #[MapFrom('open_milestones')] public int $openMilestones, #[MapFrom('closed_milestones')] public int $closedMilestones)
    {
    }
}
