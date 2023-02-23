<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class EnterprisePullRequestOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Pull Request Stats","required":["total_pulls","merged_pulls","mergeable_pulls","unmergeable_pulls"],"type":"object","properties":{"total_pulls":{"type":"integer"},"merged_pulls":{"type":"integer"},"mergeable_pulls":{"type":"integer"},"unmergeable_pulls":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Pull Request Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_pulls":13,"merged_pulls":13,"mergeable_pulls":13,"unmergeable_pulls":13}';
    public ?int $total_pulls;
    public ?int $merged_pulls;
    public ?int $mergeable_pulls;
    public ?int $unmergeable_pulls;
    public function __construct(int $total_pulls, int $merged_pulls, int $mergeable_pulls, int $unmergeable_pulls)
    {
        $this->total_pulls = $total_pulls;
        $this->merged_pulls = $merged_pulls;
        $this->mergeable_pulls = $mergeable_pulls;
        $this->unmergeable_pulls = $unmergeable_pulls;
    }
}
