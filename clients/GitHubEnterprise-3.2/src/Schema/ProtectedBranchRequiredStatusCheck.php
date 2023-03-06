<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","enforcement_level":"generated_enforcement_level","contexts":["generated_contexts"],"contexts_url":"generated_contexts_url","strict":false}';
    public string $url;
    public string $enforcement_level;
    /**
     * @var array<string>
     */
    public ?array $contexts;
    public string $contexts_url;
    public bool $strict;
    public function __construct(string $url, string $enforcement_level, array $contexts, string $contexts_url, bool $strict)
    {
        $this->url = $url;
        $this->enforcement_level = $enforcement_level;
        $this->contexts = $contexts;
        $this->contexts_url = $contexts_url;
        $this->strict = $strict;
    }
}
