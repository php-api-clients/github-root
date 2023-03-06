<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":[],"manifest":[],"tag":{"digest":"generated_digest","name":"generated_name"}}';
    public function __construct(public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $labels, public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $manifest, public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
