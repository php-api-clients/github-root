<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class EnterpriseIssueOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Issue Stats","required":["total_issues","open_issues","closed_issues"],"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Issue Stats';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_issues":13,"open_issues":13,"closed_issues":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_issues')] public int $totalIssues, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public int $openIssues, #[\EventSauce\ObjectHydrator\MapFrom('closed_issues')] public int $closedIssues)
    {
    }
}
