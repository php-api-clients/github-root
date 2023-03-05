<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Value
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","branch":"generated_branch","commit":"generated_commit","type":"generated_type"}';
    public ?string $url;
    public ?string $branch;
    public ?string $commit;
    public ?string $type;
    public function __construct(string $url, string $branch, string $commit, string $type)
    {
        $this->url = $url;
        $this->branch = $branch;
        $this->commit = $commit;
        $this->type = $type;
    }
}
