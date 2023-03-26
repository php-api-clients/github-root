<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ActionsMeta
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"rerun_info":{"plan_id":"generated_plan_id_null","job_ids":["generated_job_ids_null"]}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('rerun_info')] public ?Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo $rerunInfo)
    {
    }
}
