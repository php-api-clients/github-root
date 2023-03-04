<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ActionsMeta
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"rerun_info":{"plan_id":"generated_plan_id","job_ids":[null]}}';
    public ?Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo $rerun_info;
    public function __construct(Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo $rerun_info)
    {
        $this->rerun_info = $rerun_info;
    }
}
