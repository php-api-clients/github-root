<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class Manifest
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the manifest.",
            "examples": [
                "package-lock.json"
            ]
        },
        "file": {
            "type": "object",
            "properties": {
                "source_location": {
                    "type": "string",
                    "description": "The path of the manifest file relative to the root of the Git repository.",
                    "examples": [
                        "\\/src\\/build\\/package-lock.json"
                    ]
                }
            },
            "additionalProperties": false
        },
        "metadata": {
            "title": "metadata",
            "maxProperties": 8,
            "type": "object",
            "description": "User-defined metadata to store domain-specific information limited to 8 keys with scalar values.",
            "additionalProperties": {
                "type": [
                    "null",
                    "string",
                    "number",
                    "boolean"
                ],
                "anyOf": [
                    {
                        "type": "string"
                    },
                    {
                        "type": "number"
                    },
                    {
                        "type": "boolean"
                    }
                ]
            }
        },
        "resolved": {
            "type": "object",
            "description": "A collection of resolved package dependencies.",
            "additionalProperties": {
                "type": "object",
                "properties": {
                    "package_url": {
                        "pattern": "^pkg",
                        "type": "string",
                        "description": "Package-url (PURL) of dependency. See https:\\/\\/github.com\\/package-url\\/purl-spec for more details.",
                        "examples": [
                            "pkg:\\/npm\\/%40actions\\/http-client@1.0.11"
                        ]
                    },
                    "metadata": {
                        "title": "metadata",
                        "maxProperties": 8,
                        "type": "object",
                        "description": "User-defined metadata to store domain-specific information limited to 8 keys with scalar values.",
                        "additionalProperties": {
                            "type": [
                                "null",
                                "string",
                                "number",
                                "boolean"
                            ],
                            "anyOf": [
                                {
                                    "type": "string"
                                },
                                {
                                    "type": "number"
                                },
                                {
                                    "type": "boolean"
                                }
                            ]
                        }
                    },
                    "relationship": {
                        "enum": [
                            "direct",
                            "indirect"
                        ],
                        "type": "string",
                        "description": "A notation of whether a dependency is requested directly by this manifest or is a dependency of another dependency.",
                        "examples": [
                            "direct"
                        ]
                    },
                    "scope": {
                        "enum": [
                            "runtime",
                            "development"
                        ],
                        "type": "string",
                        "description": "A notation of whether the dependency is required for the primary build artifact (runtime) or is only used for development. Future versions of this specification may allow for more granular scopes.",
                        "examples": [
                            "runtime"
                        ]
                    },
                    "dependencies": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "description": "Array of package-url (PURLs) of direct child dependencies.",
                        "examples": [
                            "@actions\\/http-client"
                        ]
                    }
                },
                "additionalProperties": false
            }
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "package-lock.json",
    "file": {
        "source_location": "\\/src\\/build\\/package-lock.json"
    },
    "metadata": [],
    "resolved": []
}';

    /**
     * name: The name of the manifest.
     * metadata: User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * resolved: A collection of resolved package dependencies.
     */
    public function __construct(public string $name, public Schema\Manifest\File|null $file, public Schema\Metadata|null $metadata, public Schema\Manifest\Resolved|null $resolved)
    {
    }
}
