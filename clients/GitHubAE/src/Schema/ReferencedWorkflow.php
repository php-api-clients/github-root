<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ReferencedWorkflow
{
    public const SCHEMA_JSON = '{"title":"Referenced workflow","required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"sha":{"type":"string"},"ref":{"type":"string"}},"description":"A workflow referenced\\/reused by the initial caller workflow"}';
    public const SCHEMA_TITLE = 'Referenced workflow';
    public const SCHEMA_DESCRIPTION = 'A workflow referenced/reused by the initial caller workflow';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path","sha":"generated_sha","ref":"generated_ref"}';
    public ?string $path;
    public ?string $sha;
    public string $ref;
    public function __construct(string $path, string $sha, string $ref)
    {
        $this->path = $path;
        $this->sha = $sha;
        $this->ref = $ref;
    }
}
