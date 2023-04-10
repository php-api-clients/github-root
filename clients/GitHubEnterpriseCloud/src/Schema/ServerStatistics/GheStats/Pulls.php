<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics\GheStats;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Pulls
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_pulls":{"type":"integer"},"merged_pulls":{"type":"integer"},"mergeable_pulls":{"type":"integer"},"unmergeable_pulls":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_pulls":13,"merged_pulls":13,"mergeable_pulls":13,"unmergeable_pulls":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_pulls')] public ?int $totalPulls, #[\EventSauce\ObjectHydrator\MapFrom('merged_pulls')] public ?int $mergedPulls, #[\EventSauce\ObjectHydrator\MapFrom('mergeable_pulls')] public ?int $mergeablePulls, #[\EventSauce\ObjectHydrator\MapFrom('unmergeable_pulls')] public ?int $unmergeablePulls)
    {
    }
}
