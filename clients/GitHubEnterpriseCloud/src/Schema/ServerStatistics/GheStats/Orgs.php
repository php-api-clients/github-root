<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Orgs
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_orgs":10,"disabled_orgs":13,"total_teams":11,"total_team_members":18}';

    public function __construct(#[MapFrom('total_orgs')]
    public int|null $totalOrgs, #[MapFrom('disabled_orgs')]
    public int|null $disabledOrgs, #[MapFrom('total_teams')]
    public int|null $totalTeams, #[MapFrom('total_team_members')]
    public int|null $totalTeamMembers,)
    {
    }
}
