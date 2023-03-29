<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookWorkflowRunRequested\WorkflowRun;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ReferencedWorkflows
{
    public const SCHEMA_JSON = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","ref":"generated_ref_null","sha":"generated_sha_null"}';
    public function __construct(public string $path, public ?string $ref, public string $sha)
    {
    }
}
