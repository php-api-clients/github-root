<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookDeploymentCreated\WorkflowRun;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ReferencedWorkflows
{
    public const SCHEMA_JSON = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path","ref":"generated_ref","sha":"generated_sha"}';
    public function __construct(public string $path, public ?string $ref, public string $sha)
    {
    }
}
