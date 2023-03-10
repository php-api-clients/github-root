<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":null,"manifest":null,"tag":{"digest":"generated_digest","name":"generated_name"}}';
    public function __construct(public mixed $labels, public mixed $manifest, public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
