<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Job
{
    public const SCHEMA_JSON = '{"title":"Job","required":["id","node_id","run_id","run_url","head_sha","name","url","html_url","status","conclusion","started_at","completed_at","check_run_url"],"type":"object","properties":{"id":{"type":"integer","description":"The id of the job.","examples":[21]},"run_id":{"type":"integer","description":"The id of the associated workflow run.","examples":[5]},"run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5"]},"run_attempt":{"type":"integer","description":"Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.","examples":[1]},"node_id":{"type":"string","examples":["MDg6Q2hlY2tSdW40"]},"head_sha":{"type":"string","description":"The SHA of the commit that is being run.","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21"]},"html_url":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"]},"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"started_at":{"type":"string","description":"The time that the job started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"steps":{"type":"array","items":{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}},"description":"Steps in this job."},"check_run_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"]}},"description":"Information of a job execution in a workflow run"}';
    public const SCHEMA_TITLE = 'Job';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    public const SCHEMA_EXAMPLE_DATA = '{"id":21,"run_id":5,"run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/runs\\/5","run_attempt":1,"node_id":"MDg6Q2hlY2tSdW40","head_sha":"009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/jobs\\/21","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4","status":"queued","conclusion":"success","started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00","name":"test-coverage","steps":[{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}],"check_run_url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"}';
    /**
     * The id of the job.
     */
    public ?int $id;
    /**
     * The id of the associated workflow run.
     */
    public ?int $run_id;
    public ?string $run_url;
    /**
     * Attempt number of the associated workflow run, 1 for first attempt and higher if the workflow was re-run.
     */
    public int $run_attempt;
    public ?string $node_id;
    /**
     * The SHA of the commit that is being run.
     */
    public ?string $head_sha;
    public ?string $url;
    public ?string $html_url;
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public ?string $status;
    /**
     * The outcome of the job.
     */
    public ?string $conclusion;
    /**
     * The time that the job started, in ISO 8601 format.
     */
    public ?string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public ?string $completed_at;
    /**
     * The name of the job.
     */
    public ?string $name;
    /**
     * Steps in this job.
     * @var array<Schema\Job\Steps>
     */
    public array $steps;
    public ?string $check_run_url;
    public function __construct(int $id, int $run_id, string $run_url, int $run_attempt, string $node_id, string $head_sha, string $url, string $html_url, string $status, string $conclusion, string $started_at, string $completed_at, string $name, array $steps, string $check_run_url)
    {
        $this->id = $id;
        $this->run_id = $run_id;
        $this->run_url = $run_url;
        $this->run_attempt = $run_attempt;
        $this->node_id = $node_id;
        $this->head_sha = $head_sha;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->status = $status;
        $this->conclusion = $conclusion;
        $this->started_at = $started_at;
        $this->completed_at = $completed_at;
        $this->name = $name;
        $this->steps = $steps;
        $this->check_run_url = $check_run_url;
    }
}
