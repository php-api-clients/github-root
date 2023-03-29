<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRunUsage\Billable\Windows;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class JobRuns
{
    public const SCHEMA_JSON = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"job_id":13,"duration_ms":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('job_id')] public int $jobId, #[\EventSauce\ObjectHydrator\MapFrom('duration_ms')] public int $durationMs)
    {
    }
}
