<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ServerStatistics\GheStats;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Issues
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_issues":13,"open_issues":13,"closed_issues":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_issues')] public ?int $totalIssues, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public ?int $openIssues, #[\EventSauce\ObjectHydrator\MapFrom('closed_issues')] public ?int $closedIssues)
    {
    }
}
