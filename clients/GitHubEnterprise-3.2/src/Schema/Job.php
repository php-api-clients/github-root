<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Job
{
    public const SCHEMA_JSON         = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"enum":["success","failure","neutral","cancelled","skipped","timed_out","action_required",null],"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE        = 'Job';
    public const SCHEMA_DESCRIPTION  = 'Information of a job execution in a workflow run';
    public const SCHEMA_EXAMPLE_DATA = '{"id":21,"run_id":5,"run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5","node_id":"MDg6Q2hlY2tSdW40","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4","status":"queued","conclusion":"success","started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00","name":"test-coverage","steps":[{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"},{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}],"check_run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"}';

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
     */
    public function __construct(public int $id, #[MapFrom('run_id')]
    public int $runId, #[MapFrom('run_url')]
    public string $runUrl, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('head_sha')]
    public string $headSha, public string $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, public string $status, public string|null $conclusion, #[MapFrom('started_at')]
    public string $startedAt, #[MapFrom('completed_at')]
    public string|null $completedAt, public string $name, public array|null $steps, #[MapFrom('check_run_url')]
    public string $checkRunUrl,)
    {
    }
}
