<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookCheckSuiteRerequested\ActionsMeta;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"plan_id":"generated_plan_id_null","job_ids":["generated_job_ids_null"]}';
    /**
     * @param ?array<string> $jobIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('plan_id')] public ?string $planId, #[\EventSauce\ObjectHydrator\MapFrom('job_ids')] public ?array $jobIds)
    {
    }
}
