<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Issues
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_issues":13,"open_issues":13,"closed_issues":13}';
    public ?int $total_issues;
    public ?int $open_issues;
    public ?int $closed_issues;
    public function __construct(int $total_issues, int $open_issues, int $closed_issues)
    {
        $this->total_issues = $total_issues;
        $this->open_issues = $open_issues;
        $this->closed_issues = $closed_issues;
    }
}
