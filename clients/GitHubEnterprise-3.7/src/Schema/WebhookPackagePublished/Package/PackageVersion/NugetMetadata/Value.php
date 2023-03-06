<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Value
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","branch":"generated_branch","commit":"generated_commit","type":"generated_type"}';
    public function __construct(public ?string $url, public ?string $branch, public ?string $commit, public ?string $type)
    {
    }
}
