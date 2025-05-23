<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class Snapshot
{
    public const SCHEMA_JSON         = '{
    "title": "snapshot",
    "required": [
        "detector",
        "version",
        "ref",
        "sha",
        "job",
        "scanned"
    ],
    "type": "object",
    "properties": {
        "version": {
            "type": "integer",
            "description": "The version of the repository snapshot submission."
        },
        "job": {
            "required": [
                "id",
                "correlator"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "string",
                    "description": "The external ID of the job.",
                    "examples": [
                        "5622a2b0-63f6-4732-8c34-a1ab27e102a11"
                    ]
                },
                "correlator": {
                    "type": "string",
                    "description": "Correlator provides a key that is used to group snapshots submitted over time. Only the \\"latest\\" submitted snapshot for a given combination of `job.correlator` and `detector.name` will be considered when calculating a repository\'s current dependencies. Correlator should be as unique as it takes to distinguish all detection runs for a given \\"wave\\" of CI workflow you run. If you\'re using GitHub Actions, a good default value for this could be the environment variables GITHUB_WORKFLOW and GITHUB_JOB concatenated together. If you\'re using a build matrix, then you\'ll also need to add additional key(s) to distinguish between each submission inside a matrix variation.",
                    "examples": [
                        "yourworkflowname_yourjobname"
                    ]
                },
                "html_url": {
                    "type": "string",
                    "description": "The url for the job.",
                    "examples": [
                        "http:\\/\\/example.com\\/build"
                    ]
                }
            },
            "additionalProperties": false
        },
        "sha": {
            "maxLength": 40,
            "minLength": 40,
            "type": "string",
            "description": "The commit SHA associated with this dependency snapshot. Maximum length: 40 characters.",
            "examples": [
                "ddc951f4b1293222421f2c8df679786153acf689"
            ]
        },
        "ref": {
            "pattern": "^refs\\/",
            "type": "string",
            "description": "The repository branch that triggered this snapshot.",
            "examples": [
                "refs\\/heads\\/main"
            ]
        },
        "detector": {
            "required": [
                "name",
                "version",
                "url"
            ],
            "type": "object",
            "properties": {
                "name": {
                    "type": "string",
                    "description": "The name of the detector used.",
                    "examples": [
                        "docker buildtime detector"
                    ]
                },
                "version": {
                    "type": "string",
                    "description": "The version of the detector used.",
                    "examples": [
                        "1.0.0"
                    ]
                },
                "url": {
                    "type": "string",
                    "description": "The url of the detector used.",
                    "examples": [
                        "http:\\/\\/example.com\\/docker-buildtimer-detector"
                    ]
                }
            },
            "description": "A description of the detector used.",
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
        "manifests": {
            "type": "object",
            "description": "A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.",
            "additionalProperties": {
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
            }
        },
        "scanned": {
            "type": "string",
            "description": "The time at which the snapshot was scanned.",
            "format": "date-time",
            "examples": [
                "2020-06-13T14:52:50-05:00"
            ]
        }
    },
    "description": "Create a new snapshot of a repository\'s dependencies.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = 'snapshot';
    public const SCHEMA_DESCRIPTION  = 'Create a new snapshot of a repository\'s dependencies.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "version": 7,
    "job": {
        "id": "5622a2b0-63f6-4732-8c34-a1ab27e102a11",
        "correlator": "yourworkflowname_yourjobname",
        "html_url": "http:\\/\\/example.com\\/build"
    },
    "sha": "ddc951f4b1293222421f2c8df679786153acf689",
    "ref": "refs\\/heads\\/main",
    "detector": {
        "name": "docker buildtime detector",
        "version": "1.0.0",
        "url": "http:\\/\\/example.com\\/docker-buildtimer-detector"
    },
    "metadata": [],
    "manifests": [],
    "scanned": "2020-06-13T14:52:50-05:00"
}';

    /**
     * version: The version of the repository snapshot submission.
     * sha: The commit SHA associated with this dependency snapshot. Maximum length: 40 characters.
     * ref: The repository branch that triggered this snapshot.
     * detector: A description of the detector used.
     * metadata: User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * manifests: A collection of package manifests, which are a collection of related dependencies declared in a file or representing a logical group of dependencies.
     * scanned: The time at which the snapshot was scanned.
     */
    public function __construct(public int $version, public Schema\Snapshot\Job $job, public string $sha, public string $ref, public Schema\Snapshot\Detector $detector, public Schema\Metadata|null $metadata, public Schema\Snapshot\Manifests|null $manifests, public string $scanned)
    {
    }
}
