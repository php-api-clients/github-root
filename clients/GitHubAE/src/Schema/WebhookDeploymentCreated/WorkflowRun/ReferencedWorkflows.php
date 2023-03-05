<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookDeploymentCreated\WorkflowRun;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ReferencedWorkflows
{
    public const SCHEMA_JSON = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path","ref":"generated_ref","sha":"generated_sha"}';
    public ?string $path;
    public string $ref;
    public ?string $sha;
    public function __construct(string $path, string $ref, string $sha)
    {
        $this->path = $path;
        $this->ref = $ref;
        $this->sha = $sha;
    }
}
