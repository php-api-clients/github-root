<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPullRequestReviewThreadUnresolved\Thread\Comments;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"},"self":{"href":"generated_href_uri-template"}}';
    public function __construct(public Schema\WebhookPullRequestReviewThreadUnresolved\Thread\Comments\Links\Html $html, #[\EventSauce\ObjectHydrator\MapFrom('pull_request')] public Schema\WebhookPullRequestReviewThreadUnresolved\Thread\Comments\Links\PullRequest $pullRequest, public Schema\WebhookPullRequestReviewThreadUnresolved\Thread\Comments\Links\Self_ $self)
    {
    }
}
