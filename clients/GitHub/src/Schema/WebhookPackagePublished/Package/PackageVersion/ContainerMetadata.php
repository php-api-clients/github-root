<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

final readonly class ContainerMetadata implements \ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
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
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Labels $labels, public ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Manifest $manifest, public ?\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
