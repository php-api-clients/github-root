<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Labels;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Manifest;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata\Tag;

final readonly class ContainerMetadata implements \ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "labels": [],
    "manifest": [],
    "tag": {
        "digest": "generated",
        "name": "generated"
    }
}';

    public function __construct(public Labels|null $labels, public Manifest|null $manifest, public Tag|null $tag)
    {
    }
}
