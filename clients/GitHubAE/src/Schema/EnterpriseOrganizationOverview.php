<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseOrganizationOverview
{
    public const SCHEMA_JSON         = '{"title":"Enterprise Organization Stats","required":["total_orgs","disabled_orgs","total_teams","total_team_members"],"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = 'Enterprise Organization Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_orgs":10,"disabled_orgs":13,"total_teams":11,"total_team_members":18}';

    public function __construct(#[MapFrom('total_orgs')] public int $totalOrgs, #[MapFrom('disabled_orgs')] public int $disabledOrgs, #[MapFrom('total_teams')] public int $totalTeams, #[MapFrom('total_team_members')] public int $totalTeamMembers)
    {
    }
}
