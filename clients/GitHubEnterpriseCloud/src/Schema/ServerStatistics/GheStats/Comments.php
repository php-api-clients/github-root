<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics\GheStats;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Comments
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_commit_comments":{"type":"integer"},"total_gist_comments":{"type":"integer"},"total_issue_comments":{"type":"integer"},"total_pull_request_comments":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_commit_comments":13,"total_gist_comments":13,"total_issue_comments":13,"total_pull_request_comments":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_commit_comments')] public ?int $totalCommitComments, #[\EventSauce\ObjectHydrator\MapFrom('total_gist_comments')] public ?int $totalGistComments, #[\EventSauce\ObjectHydrator\MapFrom('total_issue_comments')] public ?int $totalIssueComments, #[\EventSauce\ObjectHydrator\MapFrom('total_pull_request_comments')] public ?int $totalPullRequestComments)
    {
    }
}
