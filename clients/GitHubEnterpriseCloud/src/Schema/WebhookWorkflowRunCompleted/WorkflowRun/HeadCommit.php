<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"author":{"type":"object","properties":{"email":{"type":"string"},"name":{"type":"string"}}},"committer":{"type":"object","properties":{"email":{"type":"string"},"name":{"type":"string"}}},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"email":"generated_email","name":"generated_name"},"committer":{"email":"generated_email","name":"generated_name"},"id":"generated_id","message":"generated_message","timestamp":"generated_timestamp","tree_id":"generated_tree_id"}';
    public ?Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $author;
    public ?Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $committer;
    public ?string $id;
    public ?string $message;
    public ?string $timestamp;
    public ?string $tree_id;
    public function __construct(Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $author, Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $committer, string $id, string $message, string $timestamp, string $tree_id)
    {
        $this->author = $author;
        $this->committer = $committer;
        $this->id = $id;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->tree_id = $tree_id;
    }
}
