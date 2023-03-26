<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
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
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_pulls')] public int $totalPulls, #[\EventSauce\ObjectHydrator\MapFrom('merged_pulls')] public int $mergedPulls, #[\EventSauce\ObjectHydrator\MapFrom('mergeable_pulls')] public int $mergeablePulls, #[\EventSauce\ObjectHydrator\MapFrom('unmergeable_pulls')] public int $unmergeablePulls)
    {
    }
}
