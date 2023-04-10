<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Job
{
    public const SCHEMA_JSON = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE = 'Job';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    public const SCHEMA_EXAMPLE_DATA = '{"id":21,"run_id":5,"run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5","node_id":"MDg6Q2hlY2tSdW40","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4","status":"queued","conclusion":"success","started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00","name":"test-coverage","steps":[{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}],"check_run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"}';
    /**
     * id: The id of the job.
     * runId: The id of the associated workflow run.
     * headSha: The SHA of the commit that is being run.
     * status: The phase of the lifecycle that the job is currently in.
     * conclusion: The outcome of the job.
     * startedAt: The time that the job started, in ISO 8601 format.
     * completedAt: The time that the job finished, in ISO 8601 format.
     * name: The name of the job.
     * steps: Steps in this job.
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\Job\Steps> $steps
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('run_id')] public int $runId, #[\EventSauce\ObjectHydrator\MapFrom('run_url')] public string $runUrl, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public string $status, public ?string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public string $startedAt, #[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public string $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Job\Steps::class)] public ?array $steps, #[\EventSauce\ObjectHydrator\MapFrom('check_run_url')] public string $checkRunUrl)
    {
    }
}
