<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Body;
use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PackageVersion
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "version",
        "name",
        "description",
        "summary",
        "html_url",
        "metadata",
        "package_files",
        "installation_command",
        "package_url"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "author": {
            "required": [
                "login",
                "id",
                "node_id",
                "avatar_url",
                "gravatar_id",
                "url",
                "html_url",
                "followers_url",
                "following_url",
                "gists_url",
                "starred_url",
                "subscriptions_url",
                "organizations_url",
                "repos_url",
                "events_url",
                "received_events_url",
                "type",
                "site_admin"
            ],
            "type": "object",
            "properties": {
                "avatar_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "followers_url": {
                    "type": "string"
                },
                "following_url": {
                    "type": "string"
                },
                "gists_url": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string"
                },
                "received_events_url": {
                    "type": "string"
                },
                "repos_url": {
                    "type": "string"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string"
                },
                "subscriptions_url": {
                    "type": "string"
                },
                "type": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "body": {
            "oneOf": [
                {
                    "type": "string"
                },
                {
                    "type": "object"
                }
            ]
        },
        "body_html": {
            "type": "string"
        },
        "container_metadata": {
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
        },
        "created_at": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "docker_metadata": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "tags": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            }
        },
        "draft": {
            "type": "boolean"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "installation_command": {
            "type": "string"
        },
        "manifest": {
            "type": "string"
        },
        "metadata": {
            "type": "array",
            "items": {
                "type": "object",
                "additionalProperties": true
            }
        },
        "name": {
            "type": "string"
        },
        "npm_metadata": {
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
        },
        "nuget_metadata": {
            "type": [
                "array",
                "null"
            ],
            "items": {
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
            }
        },
        "package_files": {
            "type": "array",
            "items": {
                "required": [
                    "download_url",
                    "id",
                    "name",
                    "sha256",
                    "sha1",
                    "md5",
                    "content_type",
                    "state",
                    "size",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "content_type": {
                        "type": "string"
                    },
                    "created_at": {
                        "type": "string"
                    },
                    "download_url": {
                        "type": "string"
                    },
                    "id": {
                        "type": "integer"
                    },
                    "md5": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "name": {
                        "type": "string"
                    },
                    "sha1": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "sha256": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "size": {
                        "type": "integer"
                    },
                    "state": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "updated_at": {
                        "type": "string"
                    }
                }
            }
        },
        "package_url": {
            "type": "string"
        },
        "prerelease": {
            "type": "boolean"
        },
        "release": {
            "type": "object",
            "properties": {
                "author": {
                    "type": "object",
                    "properties": {
                        "avatar_url": {
                            "type": "string"
                        },
                        "events_url": {
                            "type": "string"
                        },
                        "followers_url": {
                            "type": "string"
                        },
                        "following_url": {
                            "type": "string"
                        },
                        "gists_url": {
                            "type": "string"
                        },
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string"
                        },
                        "received_events_url": {
                            "type": "string"
                        },
                        "repos_url": {
                            "type": "string"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string"
                        },
                        "subscriptions_url": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string"
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "created_at": {
                    "type": "string"
                },
                "draft": {
                    "type": "boolean"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "prerelease": {
                    "type": "boolean"
                },
                "published_at": {
                    "type": "string"
                },
                "tag_name": {
                    "type": "string"
                },
                "target_commitish": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                }
            }
        },
        "rubygems_metadata": {
            "type": "array",
            "items": {
                "title": "Ruby Gems metadata",
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string"
                    },
                    "description": {
                        "type": "string"
                    },
                    "readme": {
                        "type": "string"
                    },
                    "homepage": {
                        "type": "string"
                    },
                    "version_info": {
                        "type": "object",
                        "properties": {
                            "version": {
                                "type": "string"
                            }
                        }
                    },
                    "platform": {
                        "type": "string"
                    },
                    "metadata": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "string"
                        }
                    },
                    "repo": {
                        "type": "string"
                    },
                    "dependencies": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "additionalProperties": {
                                "type": "string"
                            }
                        }
                    },
                    "commit_oid": {
                        "type": "string"
                    }
                }
            }
        },
        "summary": {
            "type": "string"
        },
        "tag_name": {
            "type": "string"
        },
        "target_commitish": {
            "type": "string"
        },
        "target_oid": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "version": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "author": {
        "avatar_url": "generated",
        "events_url": "generated",
        "followers_url": "generated",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "generated",
        "id": 2,
        "login": "generated",
        "node_id": "generated",
        "organizations_url": "generated",
        "received_events_url": "generated",
        "repos_url": "generated",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "generated",
        "type": "generated",
        "url": "generated",
        "user_view_type": "generated"
    },
    "body": null,
    "body_html": "generated",
    "container_metadata": {
        "labels": [],
        "manifest": [],
        "tag": {
            "digest": "generated",
            "name": "generated"
        }
    },
    "created_at": "generated",
    "description": "generated",
    "docker_metadata": [
        {
            "tags": [
                "generated",
                "generated"
            ]
        },
        {
            "tags": [
                "generated",
                "generated"
            ]
        }
    ],
    "draft": false,
    "html_url": "generated",
    "id": 2,
    "installation_command": "generated",
    "manifest": "generated",
    "metadata": [
        [],
        []
    ],
    "name": "generated",
    "npm_metadata": {
        "name": "generated",
        "version": "generated",
        "npm_user": "generated",
        "author": null,
        "bugs": null,
        "dependencies": [],
        "dev_dependencies": [],
        "peer_dependencies": [],
        "optional_dependencies": [],
        "description": "generated",
        "dist": null,
        "git_head": "generated",
        "homepage": "generated",
        "license": "generated",
        "main": "generated",
        "repository": null,
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
        "directories": null,
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
    },
    "nuget_metadata": null,
    "package_files": [
        {
            "content_type": "generated",
            "created_at": "generated",
            "download_url": "generated",
            "id": 2,
            "md5": "generated",
            "name": "generated",
            "sha1": "generated",
            "sha256": "generated",
            "size": 4,
            "state": "generated",
            "updated_at": "generated"
        },
        {
            "content_type": "generated",
            "created_at": "generated",
            "download_url": "generated",
            "id": 2,
            "md5": "generated",
            "name": "generated",
            "sha1": "generated",
            "sha256": "generated",
            "size": 4,
            "state": "generated",
            "updated_at": "generated"
        }
    ],
    "package_url": "generated",
    "prerelease": false,
    "release": {
        "author": {
            "avatar_url": "generated",
            "events_url": "generated",
            "followers_url": "generated",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "generated",
            "id": 2,
            "login": "generated",
            "node_id": "generated",
            "organizations_url": "generated",
            "received_events_url": "generated",
            "repos_url": "generated",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "generated",
            "type": "generated",
            "url": "generated",
            "user_view_type": "generated"
        },
        "created_at": "generated",
        "draft": false,
        "html_url": "generated",
        "id": 2,
        "name": "generated",
        "prerelease": false,
        "published_at": "generated",
        "tag_name": "generated",
        "target_commitish": "generated",
        "url": "generated"
    },
    "rubygems_metadata": [
        {
            "name": "generated",
            "description": "generated",
            "readme": "generated",
            "homepage": "generated",
            "version_info": {
                "version": "generated"
            },
            "platform": "generated",
            "metadata": [],
            "repo": "generated",
            "dependencies": [
                [],
                []
            ],
            "commit_oid": "generated"
        },
        {
            "name": "generated",
            "description": "generated",
            "readme": "generated",
            "homepage": "generated",
            "version_info": {
                "version": "generated"
            },
            "platform": "generated",
            "metadata": [],
            "repo": "generated",
            "dependencies": [
                [],
                []
            ],
            "commit_oid": "generated"
        }
    ],
    "summary": "generated",
    "tag_name": "generated",
    "target_commitish": "generated",
    "target_oid": "generated",
    "updated_at": "generated",
    "version": "generated"
}';

    public function __construct(public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Author|null $author, #[Body]
    public string|Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Body\One|null $body, #[MapFrom('body_html')]
    public string|null $bodyHtml, #[MapFrom('container_metadata')]
    public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\ContainerMetadata|null $containerMetadata, #[MapFrom('created_at')]
    public string|null $createdAt, public string $description, #[MapFrom('docker_metadata')]
    public array|null $dockerMetadata, public bool|null $draft, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('installation_command')]
    public string $installationCommand, public string|null $manifest, public array $metadata, public string $name, #[MapFrom('npm_metadata')]
    public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata|null $npmMetadata, #[MapFrom('nuget_metadata')]
    public array|null $nugetMetadata, #[MapFrom('package_files')]
    public array $packageFiles, #[MapFrom('package_url')]
    public string $packageUrl, public bool|null $prerelease, public Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release|null $release, #[MapFrom('rubygems_metadata')]
    public array|null $rubygemsMetadata, public string $summary, #[MapFrom('tag_name')]
    public string|null $tagName, #[MapFrom('target_commitish')]
    public string|null $targetCommitish, #[MapFrom('target_oid')]
    public string|null $targetOid, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string $version,)
    {
    }
}
