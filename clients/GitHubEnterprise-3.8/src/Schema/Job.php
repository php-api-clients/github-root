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
    public const SCHEMA_JSON = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","workflow_name","head_branch","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"run_attempt":{"type":"integer","description":"Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.","examples":[1]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"enum":["success","failure","neutral","cancelled","skipped","timed_out","action_required",null],"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]},"labels":{"type":"array","items":{"type":"string"},"description":"Labels for the workflow job. Specified by the \\"runs_on\\" attribute in the action\'s workflow file.","examples":["self-hosted","foo","bar"]},"runner_id":{"type":["integer","null"],"description":"The ID of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[1]},"runner_name":{"type":["string","null"],"description":"The name of the runner to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner"]},"runner_group_id":{"type":["integer","null"],"description":"The ID of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":[2]},"runner_group_name":{"type":["string","null"],"description":"The name of the runner group to which this job has been assigned. (If a runner hasn\'t yet been assigned, this will be null.)","examples":["my runner group"]},"workflow_name":{"type":["string","null"],"description":"The name of the workflow.","examples":["Build"]},"head_branch":{"type":["string","null"],"description":"The name of the current branch.","examples":["main"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE = 'Job';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    public const SCHEMA_EXAMPLE_DATA = '{"id":21,"run_id":5,"run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5","run_attempt":1,"node_id":"MDg6Q2hlY2tSdW40","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4","status":"queued","conclusion":"success","started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00","name":"test-coverage","steps":[{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}],"check_run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4","labels":["self-hosted"],"runner_id":1,"runner_name":"my runner","runner_group_id":2,"runner_group_name":"my runner group","workflow_name":"Build","head_branch":"main"}';
    /**
     * id: The id of the job.
     * run_id: The id of the associated workflow run.
     * run_attempt: Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.
     * head_sha: The SHA of the commit that is being run.
     * status: The phase of the lifecycle that the job is currently in.
     * conclusion: The outcome of the job.
     * started_at: The time that the job started, in ISO 8601 format.
     * completed_at: The time that the job finished, in ISO 8601 format.
     * name: The name of the job.
     * steps: Steps in this job.
     * @param ?array<\ApiClients\Client\GitHubEnterprise\Schema\Job\Steps> $steps
     * labels: Labels for the workflow job. Specified by the "runs_on" attribute in the action's workflow file.
     * @param array<string> $labels
     * runner_id: The ID of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     * runner_name: The name of the runner to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     * runner_group_id: The ID of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     * runner_group_name: The name of the runner group to which this job has been assigned. (If a runner hasn't yet been assigned, this will be null.)
     * workflow_name: The name of the workflow.
     * head_branch: The name of the current branch.
     */
    public function __construct(public int $id, public int $run_id, public string $run_url, public ?int $run_attempt, public string $node_id, public string $head_sha, public string $url, public ?string $html_url, public string $status, public ?string $conclusion, public string $started_at, public ?string $completed_at, public string $name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Job\Steps::class)] public ?array $steps, public string $check_run_url, public array $labels, public ?int $runner_id, public ?string $runner_name, public ?int $runner_group_id, public ?string $runner_group_name, public ?string $workflow_name, public ?string $head_branch)
    {
    }
}
