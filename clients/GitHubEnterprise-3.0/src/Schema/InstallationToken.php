<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class InstallationToken
{
    public const SCHEMA_JSON         = '{
    "title": "Installation Token",
    "required": [
        "token",
        "expires_at"
    ],
    "type": "object",
    "properties": {
        "token": {
            "type": "string"
        },
        "expires_at": {
            "type": "string"
        },
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
                    "description": "The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`."
                },
                "administration": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`."
                },
                "checks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`."
                },
                "contents": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`."
                },
                "deployments": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`."
                },
                "environments": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`."
                },
                "issues": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`."
                },
                "metadata": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`."
                },
                "packages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`."
                },
                "pages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`."
                },
                "pull_requests": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`."
                },
                "repository_hooks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`."
                },
                "repository_projects": {
                    "enum": [
                        "read",
                        "write",
                        "admin"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`."
                },
                "secret_scanning_alerts": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`."
                },
                "secrets": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`."
                },
                "security_events": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`."
                },
                "single_file": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`."
                },
                "statuses": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`."
                },
                "vulnerability_alerts": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage Dependabot alerts. Can be one of: `read` or `write`."
                },
                "workflows": {
                    "enum": [
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`."
                },
                "members": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`."
                },
                "organization_administration": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`."
                },
                "organization_hooks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`."
                },
                "organization_plan": {
                    "enum": [
                        "read"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing an organization\'s plan. Can be one of: `read`."
                },
                "organization_projects": {
                    "enum": [
                        "read",
                        "write",
                        "admin"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage organization projects and projects beta (where available). Can be one of: `read`, `write`, or `admin`."
                },
                "organization_packages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for organization packages published to GitHub Packages. Can be one of: `read` or `write`."
                },
                "organization_secrets": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`."
                },
                "organization_self_hosted_runners": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`."
                },
                "organization_user_blocking": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`."
                },
                "team_discussions": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`."
                },
                "content_references": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`."
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
            "type": "string"
        },
        "repositories": {
            "type": "array",
            "items": {
                "title": "Repository",
                "required": [
                    "archive_url",
                    "assignees_url",
                    "blobs_url",
                    "branches_url",
                    "collaborators_url",
                    "comments_url",
                    "commits_url",
                    "compare_url",
                    "contents_url",
                    "contributors_url",
                    "deployments_url",
                    "description",
                    "downloads_url",
                    "events_url",
                    "fork",
                    "forks_url",
                    "full_name",
                    "git_commits_url",
                    "git_refs_url",
                    "git_tags_url",
                    "hooks_url",
                    "html_url",
                    "id",
                    "node_id",
                    "issue_comment_url",
                    "issue_events_url",
                    "issues_url",
                    "keys_url",
                    "labels_url",
                    "languages_url",
                    "merges_url",
                    "milestones_url",
                    "name",
                    "notifications_url",
                    "owner",
                    "private",
                    "pulls_url",
                    "releases_url",
                    "stargazers_url",
                    "statuses_url",
                    "subscribers_url",
                    "subscription_url",
                    "tags_url",
                    "teams_url",
                    "trees_url",
                    "url",
                    "clone_url",
                    "default_branch",
                    "forks",
                    "forks_count",
                    "git_url",
                    "has_downloads",
                    "has_issues",
                    "has_projects",
                    "has_wiki",
                    "has_pages",
                    "homepage",
                    "language",
                    "archived",
                    "disabled",
                    "mirror_url",
                    "open_issues",
                    "open_issues_count",
                    "license",
                    "pushed_at",
                    "size",
                    "ssh_url",
                    "stargazers_count",
                    "svn_url",
                    "watchers",
                    "watchers_count",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "Unique identifier of the repository",
                        "examples": [
                            42
                        ]
                    },
                    "node_id": {
                        "type": "string",
                        "examples": [
                            "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the repository.",
                        "examples": [
                            "Team Environment"
                        ]
                    },
                    "full_name": {
                        "type": "string",
                        "examples": [
                            "octocat\\/Hello-World"
                        ]
                    },
                    "license": {
                        "anyOf": [
                            {
                                "type": "null"
                            },
                            {
                                "title": "License Simple",
                                "required": [
                                    "key",
                                    "name",
                                    "url",
                                    "spdx_id",
                                    "node_id"
                                ],
                                "type": "object",
                                "properties": {
                                    "key": {
                                        "type": "string",
                                        "examples": [
                                            "mit"
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "examples": [
                                            "MIT License"
                                        ]
                                    },
                                    "url": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/licenses\\/mit"
                                        ]
                                    },
                                    "spdx_id": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "MIT"
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDc6TGljZW5zZW1pdA=="
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    }
                                },
                                "description": "License Simple"
                            }
                        ]
                    },
                    "organization": {
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
                    "forks": {
                        "type": "integer"
                    },
                    "permissions": {
                        "required": [
                            "admin",
                            "pull",
                            "push"
                        ],
                        "type": "object",
                        "properties": {
                            "admin": {
                                "type": "boolean"
                            },
                            "pull": {
                                "type": "boolean"
                            },
                            "triage": {
                                "type": "boolean"
                            },
                            "push": {
                                "type": "boolean"
                            },
                            "maintain": {
                                "type": "boolean"
                            }
                        }
                    },
                    "owner": {
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
                    },
                    "private": {
                        "type": "boolean",
                        "description": "Whether the repository is private or public.",
                        "default": false
                    },
                    "html_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/github.com\\/octocat\\/Hello-World"
                        ]
                    },
                    "description": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "This your first repo!"
                        ]
                    },
                    "fork": {
                        "type": "boolean"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
                        ]
                    },
                    "archive_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
                        ]
                    },
                    "assignees_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
                        ]
                    },
                    "blobs_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
                        ]
                    },
                    "branches_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
                        ]
                    },
                    "collaborators_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
                        ]
                    },
                    "comments_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
                        ]
                    },
                    "commits_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
                        ]
                    },
                    "compare_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
                        ]
                    },
                    "contents_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
                        ]
                    },
                    "contributors_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
                        ]
                    },
                    "deployments_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
                        ]
                    },
                    "downloads_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
                        ]
                    },
                    "events_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
                        ]
                    },
                    "forks_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
                        ]
                    },
                    "git_commits_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
                        ]
                    },
                    "git_refs_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
                        ]
                    },
                    "git_tags_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
                        ]
                    },
                    "git_url": {
                        "type": "string",
                        "examples": [
                            "git:github.com\\/octocat\\/Hello-World.git"
                        ]
                    },
                    "issue_comment_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
                        ]
                    },
                    "issue_events_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
                        ]
                    },
                    "issues_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
                        ]
                    },
                    "keys_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
                        ]
                    },
                    "labels_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
                        ]
                    },
                    "languages_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
                        ]
                    },
                    "merges_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
                        ]
                    },
                    "milestones_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
                        ]
                    },
                    "notifications_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
                        ]
                    },
                    "pulls_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
                        ]
                    },
                    "releases_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
                        ]
                    },
                    "ssh_url": {
                        "type": "string",
                        "examples": [
                            "git@github.com:octocat\\/Hello-World.git"
                        ]
                    },
                    "stargazers_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
                        ]
                    },
                    "statuses_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
                        ]
                    },
                    "subscribers_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
                        ]
                    },
                    "subscription_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
                        ]
                    },
                    "tags_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
                        ]
                    },
                    "teams_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
                        ]
                    },
                    "trees_url": {
                        "type": "string",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
                        ]
                    },
                    "clone_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/github.com\\/octocat\\/Hello-World.git"
                        ]
                    },
                    "mirror_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "uri",
                        "examples": [
                            "git:git.example.com\\/octocat\\/Hello-World"
                        ]
                    },
                    "hooks_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
                        ]
                    },
                    "svn_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/svn.github.com\\/octocat\\/Hello-World"
                        ]
                    },
                    "homepage": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/github.com"
                        ]
                    },
                    "language": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "forks_count": {
                        "type": "integer",
                        "examples": [
                            9
                        ]
                    },
                    "stargazers_count": {
                        "type": "integer",
                        "examples": [
                            80
                        ]
                    },
                    "watchers_count": {
                        "type": "integer",
                        "examples": [
                            80
                        ]
                    },
                    "size": {
                        "type": "integer",
                        "examples": [
                            108
                        ]
                    },
                    "default_branch": {
                        "type": "string",
                        "description": "The default branch of the repository.",
                        "examples": [
                            "master"
                        ]
                    },
                    "open_issues_count": {
                        "type": "integer",
                        "examples": [
                            0
                        ]
                    },
                    "is_template": {
                        "type": "boolean",
                        "description": "Whether this repository acts as a template that can be used to generate new repositories.",
                        "default": false,
                        "examples": [
                            true
                        ]
                    },
                    "topics": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "has_issues": {
                        "type": "boolean",
                        "description": "Whether issues are enabled.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "has_projects": {
                        "type": "boolean",
                        "description": "Whether projects are enabled.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "has_wiki": {
                        "type": "boolean",
                        "description": "Whether the wiki is enabled.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "has_pages": {
                        "type": "boolean"
                    },
                    "has_downloads": {
                        "type": "boolean",
                        "description": "Whether downloads are enabled.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "archived": {
                        "type": "boolean",
                        "description": "Whether the repository is archived.",
                        "default": false
                    },
                    "disabled": {
                        "type": "boolean",
                        "description": "Returns whether or not this repository disabled."
                    },
                    "visibility": {
                        "type": "string",
                        "description": "The repository visibility: public, private, or internal.",
                        "default": "public"
                    },
                    "pushed_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2011-01-26T19:06:43Z"
                        ]
                    },
                    "created_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2011-01-26T19:01:12Z"
                        ]
                    },
                    "updated_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2011-01-26T19:14:43Z"
                        ]
                    },
                    "allow_rebase_merge": {
                        "type": "boolean",
                        "description": "Whether to allow rebase merges for pull requests.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "template_repository": {
                        "type": [
                            "object",
                            "null"
                        ],
                        "properties": {
                            "id": {
                                "type": "integer"
                            },
                            "node_id": {
                                "type": "string"
                            },
                            "name": {
                                "type": "string"
                            },
                            "full_name": {
                                "type": "string"
                            },
                            "owner": {
                                "type": "object",
                                "properties": {
                                    "login": {
                                        "type": "string"
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "avatar_url": {
                                        "type": "string"
                                    },
                                    "gravatar_id": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string"
                                    },
                                    "html_url": {
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
                                    "starred_url": {
                                        "type": "string"
                                    },
                                    "subscriptions_url": {
                                        "type": "string"
                                    },
                                    "organizations_url": {
                                        "type": "string"
                                    },
                                    "repos_url": {
                                        "type": "string"
                                    },
                                    "events_url": {
                                        "type": "string"
                                    },
                                    "received_events_url": {
                                        "type": "string"
                                    },
                                    "type": {
                                        "type": "string"
                                    },
                                    "site_admin": {
                                        "type": "boolean"
                                    }
                                }
                            },
                            "private": {
                                "type": "boolean"
                            },
                            "html_url": {
                                "type": "string"
                            },
                            "description": {
                                "type": "string"
                            },
                            "fork": {
                                "type": "boolean"
                            },
                            "url": {
                                "type": "string"
                            },
                            "archive_url": {
                                "type": "string"
                            },
                            "assignees_url": {
                                "type": "string"
                            },
                            "blobs_url": {
                                "type": "string"
                            },
                            "branches_url": {
                                "type": "string"
                            },
                            "collaborators_url": {
                                "type": "string"
                            },
                            "comments_url": {
                                "type": "string"
                            },
                            "commits_url": {
                                "type": "string"
                            },
                            "compare_url": {
                                "type": "string"
                            },
                            "contents_url": {
                                "type": "string"
                            },
                            "contributors_url": {
                                "type": "string"
                            },
                            "deployments_url": {
                                "type": "string"
                            },
                            "downloads_url": {
                                "type": "string"
                            },
                            "events_url": {
                                "type": "string"
                            },
                            "forks_url": {
                                "type": "string"
                            },
                            "git_commits_url": {
                                "type": "string"
                            },
                            "git_refs_url": {
                                "type": "string"
                            },
                            "git_tags_url": {
                                "type": "string"
                            },
                            "git_url": {
                                "type": "string"
                            },
                            "issue_comment_url": {
                                "type": "string"
                            },
                            "issue_events_url": {
                                "type": "string"
                            },
                            "issues_url": {
                                "type": "string"
                            },
                            "keys_url": {
                                "type": "string"
                            },
                            "labels_url": {
                                "type": "string"
                            },
                            "languages_url": {
                                "type": "string"
                            },
                            "merges_url": {
                                "type": "string"
                            },
                            "milestones_url": {
                                "type": "string"
                            },
                            "notifications_url": {
                                "type": "string"
                            },
                            "pulls_url": {
                                "type": "string"
                            },
                            "releases_url": {
                                "type": "string"
                            },
                            "ssh_url": {
                                "type": "string"
                            },
                            "stargazers_url": {
                                "type": "string"
                            },
                            "statuses_url": {
                                "type": "string"
                            },
                            "subscribers_url": {
                                "type": "string"
                            },
                            "subscription_url": {
                                "type": "string"
                            },
                            "tags_url": {
                                "type": "string"
                            },
                            "teams_url": {
                                "type": "string"
                            },
                            "trees_url": {
                                "type": "string"
                            },
                            "clone_url": {
                                "type": "string"
                            },
                            "mirror_url": {
                                "type": "string"
                            },
                            "hooks_url": {
                                "type": "string"
                            },
                            "svn_url": {
                                "type": "string"
                            },
                            "homepage": {
                                "type": "string"
                            },
                            "language": {
                                "type": "string"
                            },
                            "forks_count": {
                                "type": "integer"
                            },
                            "stargazers_count": {
                                "type": "integer"
                            },
                            "watchers_count": {
                                "type": "integer"
                            },
                            "size": {
                                "type": "integer"
                            },
                            "default_branch": {
                                "type": "string"
                            },
                            "open_issues_count": {
                                "type": "integer"
                            },
                            "is_template": {
                                "type": "boolean"
                            },
                            "topics": {
                                "type": "array",
                                "items": {
                                    "type": "string"
                                }
                            },
                            "has_issues": {
                                "type": "boolean"
                            },
                            "has_projects": {
                                "type": "boolean"
                            },
                            "has_wiki": {
                                "type": "boolean"
                            },
                            "has_pages": {
                                "type": "boolean"
                            },
                            "has_downloads": {
                                "type": "boolean"
                            },
                            "archived": {
                                "type": "boolean"
                            },
                            "disabled": {
                                "type": "boolean"
                            },
                            "visibility": {
                                "type": "string"
                            },
                            "pushed_at": {
                                "type": "string"
                            },
                            "created_at": {
                                "type": "string"
                            },
                            "updated_at": {
                                "type": "string"
                            },
                            "permissions": {
                                "type": "object",
                                "properties": {
                                    "admin": {
                                        "type": "boolean"
                                    },
                                    "maintain": {
                                        "type": "boolean"
                                    },
                                    "push": {
                                        "type": "boolean"
                                    },
                                    "triage": {
                                        "type": "boolean"
                                    },
                                    "pull": {
                                        "type": "boolean"
                                    }
                                }
                            },
                            "allow_rebase_merge": {
                                "type": "boolean"
                            },
                            "temp_clone_token": {
                                "type": "string"
                            },
                            "allow_squash_merge": {
                                "type": "boolean"
                            },
                            "delete_branch_on_merge": {
                                "type": "boolean"
                            },
                            "allow_update_branch": {
                                "type": "boolean"
                            },
                            "allow_merge_commit": {
                                "type": "boolean"
                            },
                            "subscribers_count": {
                                "type": "integer"
                            },
                            "network_count": {
                                "type": "integer"
                            }
                        }
                    },
                    "temp_clone_token": {
                        "type": "string"
                    },
                    "allow_squash_merge": {
                        "type": "boolean",
                        "description": "Whether to allow squash merges for pull requests.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "delete_branch_on_merge": {
                        "type": "boolean",
                        "description": "Whether to delete head branches when pull requests are merged",
                        "default": false,
                        "examples": [
                            false
                        ]
                    },
                    "allow_merge_commit": {
                        "type": "boolean",
                        "description": "Whether to allow merge commits for pull requests.",
                        "default": true,
                        "examples": [
                            true
                        ]
                    },
                    "allow_forking": {
                        "type": "boolean",
                        "description": "Whether to allow forking this repo"
                    },
                    "subscribers_count": {
                        "type": "integer"
                    },
                    "network_count": {
                        "type": "integer"
                    },
                    "open_issues": {
                        "type": "integer"
                    },
                    "watchers": {
                        "type": "integer"
                    },
                    "master_branch": {
                        "type": "string"
                    },
                    "starred_at": {
                        "type": "string",
                        "examples": [
                            "\\"2020-07-09T00:17:42Z\\""
                        ]
                    }
                },
                "description": "A git repository"
            }
        },
        "single_file": {
            "type": "string",
            "examples": [
                "README.md"
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
        }
    },
    "description": "Authentication token for a GitHub App installed on a user or org."
}';
    public const SCHEMA_TITLE        = 'Installation Token';
    public const SCHEMA_DESCRIPTION  = 'Authentication token for a GitHub App installed on a user or org.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "token": "generated",
    "expires_at": "generated",
    "permissions": {
        "actions": "read",
        "administration": "write",
        "checks": "write",
        "contents": "read",
        "deployments": "write",
        "environments": "write",
        "issues": "read",
        "metadata": "write",
        "packages": "write",
        "pages": "read",
        "pull_requests": "read",
        "repository_hooks": "write",
        "repository_projects": "read",
        "secret_scanning_alerts": "write",
        "secrets": "read",
        "security_events": "read",
        "single_file": "read",
        "statuses": "write",
        "vulnerability_alerts": "write",
        "workflows": "write",
        "members": "read",
        "organization_administration": "read",
        "organization_hooks": "write",
        "organization_plan": "read",
        "organization_projects": "read",
        "organization_packages": "read",
        "organization_secrets": "write",
        "organization_self_hosted_runners": "write",
        "organization_user_blocking": "write",
        "team_discussions": "write",
        "content_references": "write"
    },
    "repository_selection": "selected",
    "repositories": [
        {
            "id": 42,
            "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
            "name": "Team Environment",
            "full_name": "octocat\\/Hello-World",
            "license": {
                "key": "mit",
                "name": "MIT License",
                "url": "https:\\/\\/api.github.com\\/licenses\\/mit",
                "spdx_id": "MIT",
                "node_id": "MDc6TGljZW5zZW1pdA==",
                "html_url": "https:\\/\\/example.com\\/"
            },
            "organization": {
                "name": "generated",
                "email": "generated",
                "login": "octocat",
                "id": 1,
                "node_id": "MDQ6VXNlcjE=",
                "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                "html_url": "https:\\/\\/github.com\\/octocat",
                "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                "type": "User",
                "site_admin": false,
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
            "forks": 5,
            "permissions": {
                "admin": false,
                "pull": false,
                "triage": false,
                "push": false,
                "maintain": false
            },
            "owner": {
                "name": "generated",
                "email": "generated",
                "login": "octocat",
                "id": 1,
                "node_id": "MDQ6VXNlcjE=",
                "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                "html_url": "https:\\/\\/github.com\\/octocat",
                "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                "type": "User",
                "site_admin": false,
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
            "private": false,
            "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
            "description": "This your first repo!",
            "fork": false,
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
            "archive_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
            "assignees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
            "blobs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
            "branches_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
            "collaborators_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
            "comments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
            "commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
            "compare_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
            "contents_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
            "contributors_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
            "deployments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
            "downloads_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
            "events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
            "forks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
            "git_commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
            "git_refs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
            "git_tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
            "git_url": "git:github.com\\/octocat\\/Hello-World.git",
            "issue_comment_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
            "issue_events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
            "issues_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
            "keys_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
            "labels_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
            "languages_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
            "merges_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
            "milestones_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
            "notifications_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
            "pulls_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
            "releases_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
            "ssh_url": "git@github.com:octocat\\/Hello-World.git",
            "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
            "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
            "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
            "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
            "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
            "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
            "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
            "clone_url": "https:\\/\\/github.com\\/octocat\\/Hello-World.git",
            "mirror_url": "git:git.example.com\\/octocat\\/Hello-World",
            "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
            "svn_url": "https:\\/\\/svn.github.com\\/octocat\\/Hello-World",
            "homepage": "https:\\/\\/github.com",
            "language": "generated",
            "forks_count": 9,
            "stargazers_count": 80,
            "watchers_count": 80,
            "size": 108,
            "default_branch": "master",
            "open_issues_count": 0,
            "is_template": true,
            "topics": [
                "generated",
                "generated"
            ],
            "has_issues": true,
            "has_projects": true,
            "has_wiki": true,
            "has_pages": false,
            "has_downloads": true,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "allow_rebase_merge": true,
            "template_repository": {
                "id": 2,
                "node_id": "generated",
                "name": "generated",
                "full_name": "generated",
                "owner": {
                    "login": "generated",
                    "id": 2,
                    "node_id": "generated",
                    "avatar_url": "generated",
                    "gravatar_id": "generated",
                    "url": "generated",
                    "html_url": "generated",
                    "followers_url": "generated",
                    "following_url": "generated",
                    "gists_url": "generated",
                    "starred_url": "generated",
                    "subscriptions_url": "generated",
                    "organizations_url": "generated",
                    "repos_url": "generated",
                    "events_url": "generated",
                    "received_events_url": "generated",
                    "type": "generated",
                    "site_admin": false
                },
                "private": false,
                "html_url": "generated",
                "description": "generated",
                "fork": false,
                "url": "generated",
                "archive_url": "generated",
                "assignees_url": "generated",
                "blobs_url": "generated",
                "branches_url": "generated",
                "collaborators_url": "generated",
                "comments_url": "generated",
                "commits_url": "generated",
                "compare_url": "generated",
                "contents_url": "generated",
                "contributors_url": "generated",
                "deployments_url": "generated",
                "downloads_url": "generated",
                "events_url": "generated",
                "forks_url": "generated",
                "git_commits_url": "generated",
                "git_refs_url": "generated",
                "git_tags_url": "generated",
                "git_url": "generated",
                "issue_comment_url": "generated",
                "issue_events_url": "generated",
                "issues_url": "generated",
                "keys_url": "generated",
                "labels_url": "generated",
                "languages_url": "generated",
                "merges_url": "generated",
                "milestones_url": "generated",
                "notifications_url": "generated",
                "pulls_url": "generated",
                "releases_url": "generated",
                "ssh_url": "generated",
                "stargazers_url": "generated",
                "statuses_url": "generated",
                "subscribers_url": "generated",
                "subscription_url": "generated",
                "tags_url": "generated",
                "teams_url": "generated",
                "trees_url": "generated",
                "clone_url": "generated",
                "mirror_url": "generated",
                "hooks_url": "generated",
                "svn_url": "generated",
                "homepage": "generated",
                "language": "generated",
                "forks_count": 11,
                "stargazers_count": 16,
                "watchers_count": 14,
                "size": 4,
                "default_branch": "generated",
                "open_issues_count": 17,
                "is_template": false,
                "topics": [
                    "generated",
                    "generated"
                ],
                "has_issues": false,
                "has_projects": false,
                "has_wiki": false,
                "has_pages": false,
                "has_downloads": false,
                "archived": false,
                "disabled": false,
                "visibility": "generated",
                "pushed_at": "generated",
                "created_at": "generated",
                "updated_at": "generated",
                "permissions": {
                    "admin": false,
                    "maintain": false,
                    "push": false,
                    "triage": false,
                    "pull": false
                },
                "allow_rebase_merge": false,
                "temp_clone_token": "generated",
                "allow_squash_merge": false,
                "delete_branch_on_merge": false,
                "allow_update_branch": false,
                "allow_merge_commit": false,
                "subscribers_count": 17,
                "network_count": 13
            },
            "temp_clone_token": "generated",
            "allow_squash_merge": true,
            "delete_branch_on_merge": false,
            "allow_merge_commit": true,
            "allow_forking": false,
            "subscribers_count": 17,
            "network_count": 13,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\""
        },
        {
            "id": 42,
            "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
            "name": "Team Environment",
            "full_name": "octocat\\/Hello-World",
            "license": {
                "key": "mit",
                "name": "MIT License",
                "url": "https:\\/\\/api.github.com\\/licenses\\/mit",
                "spdx_id": "MIT",
                "node_id": "MDc6TGljZW5zZW1pdA==",
                "html_url": "https:\\/\\/example.com\\/"
            },
            "organization": {
                "name": "generated",
                "email": "generated",
                "login": "octocat",
                "id": 1,
                "node_id": "MDQ6VXNlcjE=",
                "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                "html_url": "https:\\/\\/github.com\\/octocat",
                "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                "type": "User",
                "site_admin": false,
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
            "forks": 5,
            "permissions": {
                "admin": false,
                "pull": false,
                "triage": false,
                "push": false,
                "maintain": false
            },
            "owner": {
                "name": "generated",
                "email": "generated",
                "login": "octocat",
                "id": 1,
                "node_id": "MDQ6VXNlcjE=",
                "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                "html_url": "https:\\/\\/github.com\\/octocat",
                "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                "type": "User",
                "site_admin": false,
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
            "private": false,
            "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
            "description": "This your first repo!",
            "fork": false,
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
            "archive_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
            "assignees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
            "blobs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
            "branches_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
            "collaborators_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
            "comments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
            "commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
            "compare_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
            "contents_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
            "contributors_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
            "deployments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
            "downloads_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
            "events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
            "forks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
            "git_commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
            "git_refs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
            "git_tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
            "git_url": "git:github.com\\/octocat\\/Hello-World.git",
            "issue_comment_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
            "issue_events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
            "issues_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
            "keys_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
            "labels_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
            "languages_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
            "merges_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
            "milestones_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
            "notifications_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
            "pulls_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
            "releases_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
            "ssh_url": "git@github.com:octocat\\/Hello-World.git",
            "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
            "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
            "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
            "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
            "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
            "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
            "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
            "clone_url": "https:\\/\\/github.com\\/octocat\\/Hello-World.git",
            "mirror_url": "git:git.example.com\\/octocat\\/Hello-World",
            "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
            "svn_url": "https:\\/\\/svn.github.com\\/octocat\\/Hello-World",
            "homepage": "https:\\/\\/github.com",
            "language": "generated",
            "forks_count": 9,
            "stargazers_count": 80,
            "watchers_count": 80,
            "size": 108,
            "default_branch": "master",
            "open_issues_count": 0,
            "is_template": true,
            "topics": [
                "generated",
                "generated"
            ],
            "has_issues": true,
            "has_projects": true,
            "has_wiki": true,
            "has_pages": false,
            "has_downloads": true,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "allow_rebase_merge": true,
            "template_repository": {
                "id": 2,
                "node_id": "generated",
                "name": "generated",
                "full_name": "generated",
                "owner": {
                    "login": "generated",
                    "id": 2,
                    "node_id": "generated",
                    "avatar_url": "generated",
                    "gravatar_id": "generated",
                    "url": "generated",
                    "html_url": "generated",
                    "followers_url": "generated",
                    "following_url": "generated",
                    "gists_url": "generated",
                    "starred_url": "generated",
                    "subscriptions_url": "generated",
                    "organizations_url": "generated",
                    "repos_url": "generated",
                    "events_url": "generated",
                    "received_events_url": "generated",
                    "type": "generated",
                    "site_admin": false
                },
                "private": false,
                "html_url": "generated",
                "description": "generated",
                "fork": false,
                "url": "generated",
                "archive_url": "generated",
                "assignees_url": "generated",
                "blobs_url": "generated",
                "branches_url": "generated",
                "collaborators_url": "generated",
                "comments_url": "generated",
                "commits_url": "generated",
                "compare_url": "generated",
                "contents_url": "generated",
                "contributors_url": "generated",
                "deployments_url": "generated",
                "downloads_url": "generated",
                "events_url": "generated",
                "forks_url": "generated",
                "git_commits_url": "generated",
                "git_refs_url": "generated",
                "git_tags_url": "generated",
                "git_url": "generated",
                "issue_comment_url": "generated",
                "issue_events_url": "generated",
                "issues_url": "generated",
                "keys_url": "generated",
                "labels_url": "generated",
                "languages_url": "generated",
                "merges_url": "generated",
                "milestones_url": "generated",
                "notifications_url": "generated",
                "pulls_url": "generated",
                "releases_url": "generated",
                "ssh_url": "generated",
                "stargazers_url": "generated",
                "statuses_url": "generated",
                "subscribers_url": "generated",
                "subscription_url": "generated",
                "tags_url": "generated",
                "teams_url": "generated",
                "trees_url": "generated",
                "clone_url": "generated",
                "mirror_url": "generated",
                "hooks_url": "generated",
                "svn_url": "generated",
                "homepage": "generated",
                "language": "generated",
                "forks_count": 11,
                "stargazers_count": 16,
                "watchers_count": 14,
                "size": 4,
                "default_branch": "generated",
                "open_issues_count": 17,
                "is_template": false,
                "topics": [
                    "generated",
                    "generated"
                ],
                "has_issues": false,
                "has_projects": false,
                "has_wiki": false,
                "has_pages": false,
                "has_downloads": false,
                "archived": false,
                "disabled": false,
                "visibility": "generated",
                "pushed_at": "generated",
                "created_at": "generated",
                "updated_at": "generated",
                "permissions": {
                    "admin": false,
                    "maintain": false,
                    "push": false,
                    "triage": false,
                    "pull": false
                },
                "allow_rebase_merge": false,
                "temp_clone_token": "generated",
                "allow_squash_merge": false,
                "delete_branch_on_merge": false,
                "allow_update_branch": false,
                "allow_merge_commit": false,
                "subscribers_count": 17,
                "network_count": 13
            },
            "temp_clone_token": "generated",
            "allow_squash_merge": true,
            "delete_branch_on_merge": false,
            "allow_merge_commit": true,
            "allow_forking": false,
            "subscribers_count": 17,
            "network_count": 13,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\""
        }
    ],
    "single_file": "README.md",
    "has_multiple_single_files": true,
    "single_file_paths": [
        "config.yml",
        "config.yml"
    ]
}';

    /**
     * permissions: The permissions granted to the user-to-server access token.
     */
    public function __construct(public string $token, #[MapFrom('expires_at')]
    public string $expiresAt, public Schema\AppPermissions|null $permissions, #[MapFrom('repository_selection')]
    public string|null $repositorySelection, public array|null $repositories, #[MapFrom('single_file')]
    public string|null $singleFile, #[MapFrom('has_multiple_single_files')]
    public bool|null $hasMultipleSingleFiles, #[MapFrom('single_file_paths')]
    public array|null $singleFilePaths,)
    {
    }
}
