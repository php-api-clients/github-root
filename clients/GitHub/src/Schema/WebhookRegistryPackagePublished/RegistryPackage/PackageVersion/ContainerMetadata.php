<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

final readonly class ContainerMetadata implements \ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "labels": {
            "type": [
                "object",
                "null"
            ]
        },
        "manifest": {
            "type": [
                "object",
                "null"
            ]
        },
        "tag": {
            "type": "object",
            "properties": {
                "digest": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "labels": [],
    "manifest": [],
    "tag": {
        "digest": "generated",
        "name": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Labels $labels, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Manifest $manifest, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
