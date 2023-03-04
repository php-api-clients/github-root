<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

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
    public ?int $total_orgs;
    public ?int $disabled_orgs;
    public ?int $total_teams;
    public ?int $total_team_members;
    public function __construct(int $total_orgs, int $disabled_orgs, int $total_teams, int $total_team_members)
    {
        $this->total_orgs = $total_orgs;
        $this->disabled_orgs = $disabled_orgs;
        $this->total_teams = $total_teams;
        $this->total_team_members = $total_team_members;
    }
}
