<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WorkflowUsage\Billable;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Ubuntu
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13}';
    public ?int $total_ms;
    public function __construct(int $total_ms)
    {
        $this->total_ms = $total_ms;
    }
}
