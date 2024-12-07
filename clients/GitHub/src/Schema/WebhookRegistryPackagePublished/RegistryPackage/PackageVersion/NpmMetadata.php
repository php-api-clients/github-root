<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

final readonly class NpmMetadata implements \ApiClients\Client\GitHub\Contract\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata
{
    const SCHEMA_JSON = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "name": {
            "type": "string"
        },
        "version": {
            "type": "string"
        },
        "npm_user": {
            "type": "string"
        },
        "author": {
            "type": [
                "null",
                "string",
                "object"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "bugs": {
            "type": [
                "null",
                "string",
                "object"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "dependencies": {
            "type": "object"
        },
        "dev_dependencies": {
            "type": "object"
        },
        "peer_dependencies": {
            "type": "object"
        },
        "optional_dependencies": {
            "type": "object"
        },
        "description": {
            "type": "string"
        },
        "dist": {
            "type": [
                "null",
                "string",
                "object"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "git_head": {
            "type": "string"
        },
        "homepage": {
            "type": "string"
        },
        "license": {
            "type": "string"
        },
        "main": {
            "type": "string"
        },
        "repository": {
            "type": [
                "null",
                "string",
                "object"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "scripts": {
            "type": "object"
        },
        "id": {
            "type": "string"
        },
        "node_version": {
            "type": "string"
        },
        "npm_version": {
            "type": "string"
        },
        "has_shrinkwrap": {
            "type": "boolean"
        },
        "maintainers": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "contributors": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "engines": {
            "type": "object"
        },
        "keywords": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "files": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "bin": {
            "type": "object"
        },
        "man": {
            "type": "object"
        },
        "directories": {
            "type": [
                "null",
                "string",
                "object"
            ],
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "os": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "cpu": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "readme": {
            "type": "string"
        },
        "installation_command": {
            "type": "string"
        },
        "release_id": {
            "type": "integer"
        },
        "commit_oid": {
            "type": "string"
        },
        "published_via_actions": {
            "type": "boolean"
        },
        "deleted_by_id": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "version": "generated",
    "npm_user": "generated",
    "author": [],
    "bugs": [],
    "dependencies": [],
    "dev_dependencies": [],
    "peer_dependencies": [],
    "optional_dependencies": [],
    "description": "generated",
    "dist": [],
    "git_head": "generated",
    "homepage": "generated",
    "license": "generated",
    "main": "generated",
    "repository": [],
    "scripts": [],
    "id": "generated",
    "node_version": "generated",
    "npm_version": "generated",
    "has_shrinkwrap": false,
    "maintainers": [
        "generated",
        "generated"
    ],
    "contributors": [
        "generated",
        "generated"
    ],
    "engines": [],
    "keywords": [
        "generated",
        "generated"
    ],
    "files": [
        "generated",
        "generated"
    ],
    "bin": [],
    "man": [],
    "directories": [],
    "os": [
        "generated",
        "generated"
    ],
    "cpu": [
        "generated",
        "generated"
    ],
    "readme": "generated",
    "installation_command": "generated",
    "release_id": 10,
    "commit_oid": "generated",
    "published_via_actions": false,
    "deleted_by_id": 13
}';
    public function __construct(public ?string $name, public ?string $version, #[\EventSauce\ObjectHydrator\MapFrom('npm_user')] public ?string $npmUser, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author] public null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Author\One $author, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs] public null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs\One $bugs, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dependencies $dependencies, #[\EventSauce\ObjectHydrator\MapFrom('dev_dependencies')] public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\DevDependencies $devDependencies, #[\EventSauce\ObjectHydrator\MapFrom('peer_dependencies')] public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\PeerDependencies $peerDependencies, #[\EventSauce\ObjectHydrator\MapFrom('optional_dependencies')] public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\OptionalDependencies $optionalDependencies, public ?string $description, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist] public null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Dist\One $dist, #[\EventSauce\ObjectHydrator\MapFrom('git_head')] public ?string $gitHead, public ?string $homepage, public ?string $license, public ?string $main, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository] public null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Repository\One $repository, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Scripts $scripts, public ?string $id, #[\EventSauce\ObjectHydrator\MapFrom('node_version')] public ?string $nodeVersion, #[\EventSauce\ObjectHydrator\MapFrom('npm_version')] public ?string $npmVersion, #[\EventSauce\ObjectHydrator\MapFrom('has_shrinkwrap')] public ?bool $hasShrinkwrap, public ?array $maintainers, public ?array $contributors, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Engines $engines, public ?array $keywords, public ?array $files, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bin $bin, public ?\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Man $man, #[\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories] public null|string|\ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Directories\One $directories, public ?array $os, public ?array $cpu, public ?string $readme, #[\EventSauce\ObjectHydrator\MapFrom('installation_command')] public ?string $installationCommand, #[\EventSauce\ObjectHydrator\MapFrom('release_id')] public ?int $releaseId, #[\EventSauce\ObjectHydrator\MapFrom('commit_oid')] public ?string $commitOid, #[\EventSauce\ObjectHydrator\MapFrom('published_via_actions')] public ?bool $publishedViaActions, #[\EventSauce\ObjectHydrator\MapFrom('deleted_by_id')] public ?int $deletedById)
    {
    }
}
