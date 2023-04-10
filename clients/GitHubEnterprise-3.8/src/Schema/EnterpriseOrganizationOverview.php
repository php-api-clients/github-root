<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class EnterpriseOrganizationOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Organization Stats","required":["total_orgs","disabled_orgs","total_teams","total_team_members"],"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Organization Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_orgs":13,"disabled_orgs":13,"total_teams":13,"total_team_members":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_orgs')] public int $totalOrgs, #[\EventSauce\ObjectHydrator\MapFrom('disabled_orgs')] public int $disabledOrgs, #[\EventSauce\ObjectHydrator\MapFrom('total_teams')] public int $totalTeams, #[\EventSauce\ObjectHydrator\MapFrom('total_team_members')] public int $totalTeamMembers)
    {
    }
}
