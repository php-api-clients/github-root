<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":[],"manifest":[],"tag":{"digest":"generated_digest","name":"generated_name"}}';
    public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $labels;
    public ?Schema\WebhookCheckSuiteCompleted\ActionsMeta $manifest;
    public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag;
    public function __construct(Schema\WebhookCheckSuiteCompleted\ActionsMeta $labels, Schema\WebhookCheckSuiteCompleted\ActionsMeta $manifest, Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
        $this->labels = $labels;
        $this->manifest = $manifest;
        $this->tag = $tag;
    }
}
