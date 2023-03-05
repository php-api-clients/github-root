<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPullRequestClosed\PullRequest\Links;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Comments
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"href":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"href":"generated_href"}';
    public ?string $href;
    public function __construct(string $href)
    {
        $this->href = $href;
    }
}
