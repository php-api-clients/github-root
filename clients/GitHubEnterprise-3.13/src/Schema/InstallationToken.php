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
                "codespaces": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to create, edit, delete, and list Codespaces."
                },
                "contents": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."
                },
                "dependabot_secrets": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage Dependabot secrets."
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
                "repository_custom_properties": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and edit custom properties for a repository, when allowed by the property."
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
                "organization_custom_roles": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for custom repository roles management."
                },
                "organization_custom_org_roles": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for custom organization roles management."
                },
                "organization_custom_properties": {
                    "enum": [
                        "read",
                        "write",
                        "admin"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for custom property management."
                },
                "organization_copilot_seat_management": {
                    "enum": [
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for managing access to GitHub Copilot for members of an organization with a Copilot Business subscription. This property is in public preview and is subject to change."
                },
                "organization_announcement_banners": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage announcement banners for an organization."
                },
                "organization_events": {
                    "enum": [
                        "read"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view events triggered by an activity in an organization."
                },
                "organization_hooks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization."
                },
                "organization_personal_access_tokens": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization."
                },
                "organization_personal_access_token_requests": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization."
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
                    "description": "The level of permission to grant the access token to manage organization projects and projects public preview (where available)."
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
                "email_addresses": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the email addresses belonging to a user."
                },
                "followers": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the followers belonging to a user."
                },
                "git_ssh_keys": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage git SSH keys."
                },
                "gpg_keys": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage GPG keys belonging to a user."
                },
                "interaction_limits": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage interaction limits on a repository."
                },
                "profile": {
                    "enum": [
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the profile settings belonging to a user."
                },
                "starring": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to list and manage repositories a user is starring."
                }
            },
            "description": "The permissions granted to the user access token.",
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
                        "format": "int64",
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
                                "format": "int64",
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
                            },
                            "user_view_type": {
                                "type": "string",
                                "examples": [
                                    "public"
                                ]
                            }
                        },
                        "description": "A GitHub user."
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
                        "description": "The size of the repository, in kilobytes. Size is calculated hourly. When a repository is initially created, the size is 0.",
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
                        "deprecated": true,
                        "examples": [
                            true
                        ]
                    },
                    "has_discussions": {
                        "type": "boolean",
                        "description": "Whether discussions are enabled.",
                        "default": false,
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
                    "allow_auto_merge": {
                        "type": "boolean",
                        "description": "Whether to allow Auto-merge to be used on pull requests.",
                        "default": false,
                        "examples": [
                            false
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
                    "allow_update_branch": {
                        "type": "boolean",
                        "description": "Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.",
                        "default": false,
                        "examples": [
                            false
                        ]
                    },
                    "use_squash_pr_title_as_default": {
                        "type": "boolean",
                        "description": "Whether a squash merge commit can use the pull request title as default. **This property is closing down. Please use `squash_merge_commit_title` instead.",
                        "default": false,
                        "deprecated": true
                    },
                    "squash_merge_commit_title": {
                        "enum": [
                            "PR_TITLE",
                            "COMMIT_OR_PR_TITLE"
                        ],
                        "type": "string",
                        "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                    },
                    "squash_merge_commit_message": {
                        "enum": [
                            "PR_BODY",
                            "COMMIT_MESSAGES",
                            "BLANK"
                        ],
                        "type": "string",
                        "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                    },
                    "merge_commit_title": {
                        "enum": [
                            "PR_TITLE",
                            "MERGE_MESSAGE"
                        ],
                        "type": "string",
                        "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                    },
                    "merge_commit_message": {
                        "enum": [
                            "PR_BODY",
                            "PR_TITLE",
                            "BLANK"
                        ],
                        "type": "string",
                        "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
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
                    "web_commit_signoff_required": {
                        "type": "boolean",
                        "description": "Whether to require contributors to sign off on web-based commits",
                        "default": false
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
                    },
                    "anonymous_access_enabled": {
                        "type": "boolean",
                        "description": "Whether anonymous git access is enabled for this repository"
                    }
                },
                "description": "A repository on GitHub."
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
        "codespaces": "write",
        "contents": "read",
        "dependabot_secrets": "write",
        "deployments": "write",
        "environments": "write",
        "issues": "read",
        "metadata": "write",
        "packages": "write",
        "pages": "read",
        "pull_requests": "read",
        "repository_custom_properties": "write",
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
        "organization_custom_roles": "read",
        "organization_custom_org_roles": "read",
        "organization_custom_properties": "admin",
        "organization_copilot_seat_management": "write",
        "organization_announcement_banners": "read",
        "organization_events": "read",
        "organization_hooks": "write",
        "organization_personal_access_tokens": "read",
        "organization_personal_access_token_requests": "read",
        "organization_plan": "read",
        "organization_projects": "read",
        "organization_packages": "read",
        "organization_secrets": "write",
        "organization_self_hosted_runners": "write",
        "organization_user_blocking": "write",
        "team_discussions": "write",
        "email_addresses": "read",
        "followers": "read",
        "git_ssh_keys": "write",
        "gpg_keys": "write",
        "interaction_limits": "write",
        "profile": "write",
        "starring": "write"
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
                "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                "user_view_type": "public"
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
            "has_discussions": true,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "allow_rebase_merge": true,
            "temp_clone_token": "generated",
            "allow_squash_merge": true,
            "allow_auto_merge": false,
            "delete_branch_on_merge": false,
            "allow_update_branch": false,
            "use_squash_pr_title_as_default": false,
            "squash_merge_commit_title": "PR_TITLE",
            "squash_merge_commit_message": "PR_BODY",
            "merge_commit_title": "MERGE_MESSAGE",
            "merge_commit_message": "BLANK",
            "allow_merge_commit": true,
            "allow_forking": false,
            "web_commit_signoff_required": false,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\"",
            "anonymous_access_enabled": false
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
                "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                "user_view_type": "public"
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
            "has_discussions": true,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "allow_rebase_merge": true,
            "temp_clone_token": "generated",
            "allow_squash_merge": true,
            "allow_auto_merge": false,
            "delete_branch_on_merge": false,
            "allow_update_branch": false,
            "use_squash_pr_title_as_default": false,
            "squash_merge_commit_title": "PR_TITLE",
            "squash_merge_commit_message": "PR_BODY",
            "merge_commit_title": "MERGE_MESSAGE",
            "merge_commit_message": "BLANK",
            "allow_merge_commit": true,
            "allow_forking": false,
            "web_commit_signoff_required": false,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\"",
            "anonymous_access_enabled": false
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
     * permissions: The permissions granted to the user access token.
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
