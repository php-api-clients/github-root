<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCheckSuiteRerequested\ActionsMeta;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"plan_id":"generated_plan_id","job_ids":["generated_job_ids"]}';
    public ?string $plan_id;
    /**
     * @var array<string>
     */
    public ?array $job_ids;
    public function __construct(string $plan_id, array $job_ids)
    {
        $this->plan_id = $plan_id;
        $this->job_ids = $job_ids;
    }
}
