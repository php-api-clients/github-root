<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

final readonly class NugetMetadata implements \ApiClients\Client\GitHub\Contract\WebhookPackagePublished\Package\PackageVersion\NugetMetadata
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "id": {
            "oneOf": [
                {
                    "type": "integer"
                },
                {
                    "type": "string"
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "value": {
        "url": "generated",
        "branch": "generated",
        "commit": "generated",
        "type": "generated"
    }
}';
    public function __construct(public null|int|string $id, public ?string $name, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value] public null|bool|string|int|\ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value\Three $value)
    {
    }
}
