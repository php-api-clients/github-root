<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Id;
use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Value;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Id\One;
use ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata\Value\Three;

final readonly class NugetMetadata implements \ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NugetMetadata
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": [
                "null",
                "string",
                "object",
                "integer"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                },
                {
                    "type": "integer"
                }
            ]
        },
        "name": {
            "type": "string"
        },
        "value": {
            "oneOf": [
                {
                    "type": "boolean"
                },
                {
                    "type": "string"
                },
                {
                    "type": "integer"
                },
                {
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string"
                        },
                        "branch": {
                            "type": "string"
                        },
                        "commit": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        }
                    }
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 5,
    "name": "generated",
    "value": {
        "url": "generated",
        "branch": "generated",
        "commit": "generated",
        "type": "generated"
    }
}';

    public function __construct(#[Id]
    public string|One|int|null $id, public string|null $name, #[Value]
    public bool|string|int|Three|null $value,)
    {
    }
}
