<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Orgs
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalOrgs":13,"disabledOrgs":13,"totalTeams":13,"totalTeamMembers":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_orgs')] public ?int $totalOrgs, #[\EventSauce\ObjectHydrator\MapFrom('disabled_orgs')] public ?int $disabledOrgs, #[\EventSauce\ObjectHydrator\MapFrom('total_teams')] public ?int $totalTeams, #[\EventSauce\ObjectHydrator\MapFrom('total_team_members')] public ?int $totalTeamMembers)
    {
    }
}
