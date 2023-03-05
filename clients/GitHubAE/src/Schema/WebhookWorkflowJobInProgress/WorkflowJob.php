<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookWorkflowJobInProgress;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["status","steps"],"type":"object","properties":{"check_run_url":{"type":"string"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"integer"},"run_url":{"type":"string"},"runner_group_id":{"type":["number","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["number","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string"},"status":{"enum":["in_progress","completed","queued"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["in_progress","completed","pending","queued"],"type":"string"}}}},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"generated_check_run_url","completed_at":"generated_completed_at","conclusion":"generated_conclusion","created_at":"generated_created_at","head_sha":"generated_head_sha","html_url":"generated_html_url","id":13,"labels":[null],"name":"generated_name","node_id":"generated_node_id","run_attempt":13,"run_id":13,"run_url":"generated_run_url","runner_group_id":13,"runner_group_name":"generated_runner_group_name","runner_id":13,"runner_name":"generated_runner_name","started_at":"generated_started_at","status":"generated_status","head_branch":"generated_head_branch","workflow_name":"generated_workflow_name","steps":[null],"url":"generated_url"}';
    public string $check_run_url;
    public ?string $completed_at;
    public ?string $conclusion;
    /**
     * The time that the job created.
     */
    public string $created_at;
    public string $head_sha;
    public string $html_url;
    public int $id;
    /**
     * @var array<string>
     */
    public array $labels;
    public string $name;
    public string $node_id;
    public int $run_attempt;
    public int $run_id;
    public string $run_url;
    public ?int $runner_group_id;
    public ?string $runner_group_name;
    public ?int $runner_id;
    public ?string $runner_name;
    public string $started_at;
    public ?string $status;
    /**
     * The name of the current branch.
     */
    public ?string $head_branch;
    /**
     * The name of the workflow.
     */
    public ?string $workflow_name;
    /**
     * @var array<Schema\WebhookWorkflowJobInProgress\WorkflowJob\Steps>
     */
    public ?array $steps;
    public string $url;
    public function __construct(string $check_run_url, string $completed_at, string $conclusion, string $created_at, string $head_sha, string $html_url, int $id, array $labels, string $name, string $node_id, int $run_attempt, int $run_id, string $run_url, int $runner_group_id, string $runner_group_name, int $runner_id, string $runner_name, string $started_at, string $status, string $head_branch, string $workflow_name, array $steps, string $url)
    {
        $this->check_run_url = $check_run_url;
        $this->completed_at = $completed_at;
        $this->conclusion = $conclusion;
        $this->created_at = $created_at;
        $this->head_sha = $head_sha;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->labels = $labels;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->run_attempt = $run_attempt;
        $this->run_id = $run_id;
        $this->run_url = $run_url;
        $this->runner_group_id = $runner_group_id;
        $this->runner_group_name = $runner_group_name;
        $this->runner_id = $runner_id;
        $this->runner_name = $runner_name;
        $this->started_at = $started_at;
        $this->status = $status;
        $this->head_branch = $head_branch;
        $this->workflow_name = $workflow_name;
        $this->steps = $steps;
        $this->url = $url;
    }
}
