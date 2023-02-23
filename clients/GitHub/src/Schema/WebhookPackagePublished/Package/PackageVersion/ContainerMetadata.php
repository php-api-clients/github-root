<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
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
