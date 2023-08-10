<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseCommentOverview
{
    public const SCHEMA_JSON         = '{"title":"Enterprise Comment Stats","required":["total_commit_comments","total_gist_comments","total_issue_comments","total_pull_request_comments"],"type":"object","properties":{"total_commit_comments":{"type":"integer"},"total_gist_comments":{"type":"integer"},"total_issue_comments":{"type":"integer"},"total_pull_request_comments":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = 'Enterprise Comment Stats';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_commit_comments":21,"total_gist_comments":19,"total_issue_comments":20,"total_pull_request_comments":27}';

    public function __construct(#[MapFrom('total_commit_comments')]
    public int $totalCommitComments, #[MapFrom('total_gist_comments')]
    public int $totalGistComments, #[MapFrom('total_issue_comments')]
    public int $totalIssueComments, #[MapFrom('total_pull_request_comments')]
    public int $totalPullRequestComments,)
    {
    }
}
