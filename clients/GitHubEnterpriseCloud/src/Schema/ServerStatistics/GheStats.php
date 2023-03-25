<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class GheStats
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"comments":{"type":"object","properties":{"total_commit_comments":{"type":"integer"},"total_gist_comments":{"type":"integer"},"total_issue_comments":{"type":"integer"},"total_pull_request_comments":{"type":"integer"}}},"gists":{"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}},"hooks":{"type":"object","properties":{"total_hooks":{"type":"integer"},"active_hooks":{"type":"integer"},"inactive_hooks":{"type":"integer"}}},"issues":{"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}},"milestones":{"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}},"orgs":{"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}},"pages":{"type":"object","properties":{"total_pages":{"type":"integer"}}},"pulls":{"type":"object","properties":{"total_pulls":{"type":"integer"},"merged_pulls":{"type":"integer"},"mergeable_pulls":{"type":"integer"},"unmergeable_pulls":{"type":"integer"}}},"repos":{"type":"object","properties":{"total_repos":{"type":"integer"},"root_repos":{"type":"integer"},"fork_repos":{"type":"integer"},"org_repos":{"type":"integer"},"total_pushes":{"type":"integer"},"total_wikis":{"type":"integer"}}},"users":{"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"totalCommitComments":13,"totalGistComments":13,"totalIssueComments":13,"totalPullRequestComments":13},"gists":{"totalGists":13,"privateGists":13,"publicGists":13},"hooks":{"totalHooks":13,"activeHooks":13,"inactiveHooks":13},"issues":{"totalIssues":13,"openIssues":13,"closedIssues":13},"milestones":{"totalMilestones":13,"openMilestones":13,"closedMilestones":13},"orgs":{"totalOrgs":13,"disabledOrgs":13,"totalTeams":13,"totalTeamMembers":13},"pages":{"totalPages":13},"pulls":{"totalPulls":13,"mergedPulls":13,"mergeablePulls":13,"unmergeablePulls":13},"repos":{"totalRepos":13,"rootRepos":13,"forkRepos":13,"orgRepos":13,"totalPushes":13,"totalWikis":13},"users":{"totalUsers":13,"adminUsers":13,"suspendedUsers":13}}';
    public function __construct(public ?Schema\ServerStatistics\GheStats\Comments $comments, public ?Schema\ServerStatistics\GheStats\Gists $gists, public ?Schema\ServerStatistics\GheStats\Hooks $hooks, public ?Schema\ServerStatistics\GheStats\Issues $issues, public ?Schema\ServerStatistics\GheStats\Milestones $milestones, public ?Schema\ServerStatistics\GheStats\Orgs $orgs, public ?Schema\ServerStatistics\GheStats\Pages $pages, public ?Schema\ServerStatistics\GheStats\Pulls $pulls, public ?Schema\ServerStatistics\GheStats\Repos $repos, public ?Schema\ServerStatistics\GheStats\Users $users)
    {
    }
}
