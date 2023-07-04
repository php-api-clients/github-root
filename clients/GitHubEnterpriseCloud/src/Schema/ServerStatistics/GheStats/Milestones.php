<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Milestones
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_milestones":16,"open_milestones":15,"closed_milestones":17}';

    public function __construct(#[MapFrom('total_milestones')]
    public int|null $totalMilestones, #[MapFrom('open_milestones')]
    public int|null $openMilestones, #[MapFrom('closed_milestones')]
    public int|null $closedMilestones,)
    {
    }
}
