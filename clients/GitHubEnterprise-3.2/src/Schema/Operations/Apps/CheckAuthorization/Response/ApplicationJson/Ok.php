<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\CheckAuthorization\Response\ApplicationJson;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "anyOf": [
        {
            "type": "null"
        },
        {
            "title": "Authorization",
            "required": [
                "app",
                "id",
                "note",
                "note_url",
                "scopes",
                "token",
                "hashed_token",
                "token_last_eight",
                "fingerprint",
                "url",
                "created_at",
                "updated_at",
                "expires_at"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "scopes": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "string"
                    },
                    "description": "A list of scopes that this authorization is in."
                },
                "token": {
                    "type": "string"
                },
                "token_last_eight": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "hashed_token": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "app": {
                    "required": [
                        "client_id",
                        "name",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "client_id": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "note": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "note_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "fingerprint": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "user": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Simple User",
                            "required": [
                                "avatar_url",
                                "events_url",
                                "followers_url",
                                "following_url",
                                "gists_url",
                                "gravatar_id",
                                "html_url",
                                "id",
                                "node_id",
                                "login",
                                "organizations_url",
                                "received_events_url",
                                "repos_url",
                                "site_admin",
                                "starred_url",
                                "subscriptions_url",
                                "type",
                                "url"
                            ],
                            "type": "object",
                            "properties": {
                                "name": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "login": {
                                    "type": "string",
                                    "examples": [
                                        "octocat"
                                    ]
                                },
                                "id": {
                                    "type": "integer",
                                    "examples": [
                                        1
                                    ]
                                },
                                "node_id": {
                                    "type": "string",
                                    "examples": [
                                        "MDQ6VXNlcjE="
                                    ]
                                },
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                                    ]
                                },
                                "gravatar_id": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "41d064eb2195891e12d0413f63227ea7"
                                    ]
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat"
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/github.com\\/octocat"
                                    ]
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                                    ]
                                },
                                "following_url": {
                                    "type": "string",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                                    ]
                                },
                                "gists_url": {
                                    "type": "string",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                                    ]
                                },
                                "starred_url": {
                                    "type": "string",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                                    ]
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                                    ]
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                                    ]
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                                    ]
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                                    ]
                                },
                                "type": {
                                    "type": "string",
                                    "examples": [
                                        "User"
                                    ]
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_at": {
                                    "type": "string",
                                    "examples": [
                                        "\\"2020-07-09T00:17:55Z\\""
                                    ]
                                }
                            },
                            "description": "Simple User"
                        }
                    ]
                },
                "installation": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Scoped Installation",
                            "required": [
                                "permissions",
                                "repository_selection",
                                "single_file_name",
                                "repositories_url",
                                "account"
                            ],
                            "type": "object",
                            "properties": {
                                "permissions": {
                                    "title": "App Permissions",
                                    "type": "object",
                                    "properties": {
                                        "actions": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."
                                        },
                                        "administration": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."
                                        },
                                        "checks": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for checks on code."
                                        },
                                        "contents": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."
                                        },
                                        "deployments": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for deployments and deployment statuses."
                                        },
                                        "environments": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for managing repository environments."
                                        },
                                        "issues": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."
                                        },
                                        "metadata": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."
                                        },
                                        "packages": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for packages published to GitHub Packages."
                                        },
                                        "pages": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."
                                        },
                                        "pull_requests": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."
                                        },
                                        "repository_hooks": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage the post-receive hooks for a repository."
                                        },
                                        "repository_projects": {
                                            "enum": [
                                                "read",
                                                "write",
                                                "admin"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage repository projects, columns, and cards."
                                        },
                                        "secret_scanning_alerts": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to view and manage secret scanning alerts."
                                        },
                                        "secrets": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage repository secrets."
                                        },
                                        "security_events": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to view and manage security events like code scanning alerts."
                                        },
                                        "single_file": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage just a single file."
                                        },
                                        "statuses": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for commit statuses."
                                        },
                                        "vulnerability_alerts": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage Dependabot alerts."
                                        },
                                        "workflows": {
                                            "enum": [
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to update GitHub Actions workflow files."
                                        },
                                        "members": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for organization teams and members."
                                        },
                                        "organization_administration": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage access to an organization."
                                        },
                                        "organization_hooks": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization."
                                        },
                                        "organization_plan": {
                                            "enum": [
                                                "read"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for viewing an organization\'s plan."
                                        },
                                        "organization_projects": {
                                            "enum": [
                                                "read",
                                                "write",
                                                "admin"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage organization projects and projects beta (where available)."
                                        },
                                        "organization_packages": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for organization packages published to GitHub Packages."
                                        },
                                        "organization_secrets": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage organization secrets."
                                        },
                                        "organization_self_hosted_runners": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."
                                        },
                                        "organization_user_blocking": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to view and manage users blocked by the organization."
                                        },
                                        "team_discussions": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token to manage team discussions and related comments."
                                        },
                                        "content_references": {
                                            "enum": [
                                                "read",
                                                "write"
                                            ],
                                            "type": "string",
                                            "description": "The level of permission to grant the access token for notification of content references and creation content attachments."
                                        }
                                    },
                                    "description": "The permissions granted to the user-to-server access token.",
                                    "example": {
                                        "contents": "read",
                                        "issues": "read",
                                        "deployments": "write",
                                        "single_file": "read"
                                    }
                                },
                                "repository_selection": {
                                    "enum": [
                                        "all",
                                        "selected"
                                    ],
                                    "type": "string",
                                    "description": "Describe whether all repositories have been selected or there\'s a selection involved"
                                },
                                "single_file_name": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "config.yaml"
                                    ]
                                },
                                "has_multiple_single_files": {
                                    "type": "boolean",
                                    "examples": [
                                        true
                                    ]
                                },
                                "single_file_paths": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "examples": [
                                        "config.yml",
                                        ".github\\/issue_TEMPLATE.md"
                                    ]
                                },
                                "repositories_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                                    ]
                                },
                                "account": {
                                    "title": "Simple User",
                                    "required": [
                                        "avatar_url",
                                        "events_url",
                                        "followers_url",
                                        "following_url",
                                        "gists_url",
                                        "gravatar_id",
                                        "html_url",
                                        "id",
                                        "node_id",
                                        "login",
                                        "organizations_url",
                                        "received_events_url",
                                        "repos_url",
                                        "site_admin",
                                        "starred_url",
                                        "subscriptions_url",
                                        "type",
                                        "url"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "name": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "login": {
                                            "type": "string",
                                            "examples": [
                                                "octocat"
                                            ]
                                        },
                                        "id": {
                                            "type": "integer",
                                            "examples": [
                                                1
                                            ]
                                        },
                                        "node_id": {
                                            "type": "string",
                                            "examples": [
                                                "MDQ6VXNlcjE="
                                            ]
                                        },
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                                            ]
                                        },
                                        "gravatar_id": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "examples": [
                                                "41d064eb2195891e12d0413f63227ea7"
                                            ]
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat"
                                            ]
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/github.com\\/octocat"
                                            ]
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                                            ]
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                                            ]
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                                            ]
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                                            ]
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                                            ]
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                                            ]
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                                            ]
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                                            ]
                                        },
                                        "type": {
                                            "type": "string",
                                            "examples": [
                                                "User"
                                            ]
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_at": {
                                            "type": "string",
                                            "examples": [
                                                "\\"2020-07-09T00:17:55Z\\""
                                            ]
                                        }
                                    },
                                    "description": "Simple User"
                                }
                            }
                        }
                    ]
                },
                "expires_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                }
            },
            "description": "The authorization for an OAuth app, GitHub App, or a Personal Access Token."
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
