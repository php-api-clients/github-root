<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Issues
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_issues":12,"open_issues":11,"closed_issues":13}';

    public function __construct(#[MapFrom('total_issues')]
    public int|null $totalIssues, #[MapFrom('open_issues')]
    public int|null $openIssues, #[MapFrom('closed_issues')]
    public int|null $closedIssues,)
    {
    }
}
