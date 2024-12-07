<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\PackageVersion;

final readonly class Metadata implements \ApiClients\Client\GitHub\Contract\PackageVersion\Metadata
{
    const SCHEMA_JSON = '{
    "title": "Package Version Metadata",
    "required": [
        "package_type"
    ],
    "type": "object",
    "properties": {
        "package_type": {
            "enum": [
                "npm",
                "maven",
                "rubygems",
                "docker",
                "nuget",
                "container"
            ],
            "type": "string",
            "examples": [
                "docker"
            ]
        },
        "container": {
            "title": "Container Metadata",
            "required": [
                "tags"
            ],
            "type": "object",
            "properties": {
                "tags": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        },
        "docker": {
            "title": "Docker Metadata",
            "required": [
                "tags"
            ],
            "type": "object",
            "properties": {
                "tag": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "package_type": "npm",
    "container": {
        "tags": [
            "generated",
            "generated"
        ]
    },
    "docker": {
        "tag": [
            "generated",
            "generated"
        ]
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('package_type')] public string $packageType, public ?\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Container $container, public ?\ApiClients\Client\GitHub\Schema\PackageVersion\Metadata\Docker $docker)
    {
    }
}
