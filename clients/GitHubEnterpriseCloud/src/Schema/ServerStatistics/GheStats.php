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
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"total_commit_comments":13,"total_gist_comments":13,"total_issue_comments":13,"total_pull_request_comments":13},"gists":{"total_gists":13,"private_gists":13,"public_gists":13},"hooks":{"total_hooks":13,"active_hooks":13,"inactive_hooks":13},"issues":{"total_issues":13,"open_issues":13,"closed_issues":13},"milestones":{"total_milestones":13,"open_milestones":13,"closed_milestones":13},"orgs":{"total_orgs":13,"disabled_orgs":13,"total_teams":13,"total_team_members":13},"pages":{"total_pages":13},"pulls":{"total_pulls":13,"merged_pulls":13,"mergeable_pulls":13,"unmergeable_pulls":13},"repos":{"total_repos":13,"root_repos":13,"fork_repos":13,"org_repos":13,"total_pushes":13,"total_wikis":13},"users":{"total_users":13,"admin_users":13,"suspended_users":13}}';
    public function __construct(public ?Schema\ServerStatistics\GheStats\Comments $comments, public ?Schema\ServerStatistics\GheStats\Gists $gists, public ?Schema\ServerStatistics\GheStats\Hooks $hooks, public ?Schema\ServerStatistics\GheStats\Issues $issues, public ?Schema\ServerStatistics\GheStats\Milestones $milestones, public ?Schema\ServerStatistics\GheStats\Orgs $orgs, public ?Schema\ServerStatistics\GheStats\Pages $pages, public ?Schema\ServerStatistics\GheStats\Pulls $pulls, public ?Schema\ServerStatistics\GheStats\Repos $repos, public ?Schema\ServerStatistics\GheStats\Users $users)
    {
    }
}
