<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookPullRequestClosed\PullRequest;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"comments":{"type":"object","properties":{"href":{"type":"string"}}},"commits":{"type":"object","properties":{"href":{"type":"string"}}},"html":{"type":"object","properties":{"href":{"type":"string"}}},"issue":{"type":"object","properties":{"href":{"type":"string"}}},"review_comment":{"type":"object","properties":{"href":{"type":"string"}}},"review_comments":{"type":"object","properties":{"href":{"type":"string"}}},"self":{"type":"object","properties":{"href":{"type":"string"}}},"statuses":{"type":"object","properties":{"href":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"comments":{"href":"generated_href"},"commits":{"href":"generated_href"},"html":{"href":"generated_href"},"issue":{"href":"generated_href"},"review_comment":{"href":"generated_href"},"review_comments":{"href":"generated_href"},"self":{"href":"generated_href"},"statuses":{"href":"generated_href"}}';
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $comments;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $commits;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $html;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $issue;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $review_comment;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $review_comments;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $self;
    public ?Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $statuses;
    public function __construct(Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $comments, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $commits, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $html, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $issue, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $review_comment, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $review_comments, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $self, Schema\WebhookPullRequestClosed\PullRequest\Links\Comments $statuses)
    {
        $this->comments = $comments;
        $this->commits = $commits;
        $this->html = $html;
        $this->issue = $issue;
        $this->review_comment = $review_comment;
        $this->review_comments = $review_comments;
        $this->self = $self;
        $this->statuses = $statuses;
    }
}
