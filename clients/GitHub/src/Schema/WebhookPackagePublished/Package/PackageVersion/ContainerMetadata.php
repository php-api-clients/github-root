<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Labels;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Manifest;
use ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag;

final readonly class ContainerMetadata implements \ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata
{
    public const SCHEMA_JSON         = '{
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
