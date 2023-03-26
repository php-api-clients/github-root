<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookPullRequestReviewCommentCreated\Comment;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $pullRequest, public Schema\WebhookPullRequestAssigned\PullRequest\Links\Comments $self)
    {
    }
}
