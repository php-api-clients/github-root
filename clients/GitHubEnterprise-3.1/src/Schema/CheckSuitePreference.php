<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class CheckSuitePreference
{
    public const SCHEMA_JSON         = '{
    "title": "Check Suite Preference",
    "required": [
        "preferences",
        "repository"
    ],
    "type": "object",
    "properties": {
        "preferences": {
            "type": "object",
            "properties": {
                "auto_trigger_checks": {
                    "type": "array",
                    "items": {
                        "required": [
                            "app_id",
                            "setting"
                        ],
                        "type": "object",
                        "properties": {
                            "app_id": {
                                "type": "integer"
                            },
                            "setting": {
                                "type": "boolean"
                            }
                        }
                    }
                }
            }
        },
        "repository": {
            "title": "Minimal Repository",
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
                "url"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "examples": [
                        1296269
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
                    "examples": [
                        "Hello-World"
                    ]
                },
                "full_name": {
                    "type": "string",
                    "examples": [
                        "octocat\\/Hello-World"
                    ]
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
                    "type": "boolean"
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
                    "type": "string"
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
                    "type": "string"
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
                    "type": "string"
                },
                "mirror_url": {
                    "type": [
                        "string",
                        "null"
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
                    "type": "string"
                },
                "homepage": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "language": {
                    "type": [
                        "string",
                        "null"
                    ]
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
                "template_repository": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
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
                                "allow_update_branch": {
                                    "type": "boolean",
                                    "description": "Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.",
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
                    ]
                },
                "temp_clone_token": {
                    "type": "string"
                },
                "delete_branch_on_merge": {
                    "type": "boolean"
                },
                "subscribers_count": {
                    "type": "integer"
                },
                "network_count": {
                    "type": "integer"
                },
                "code_of_conduct": {
                    "title": "Code Of Conduct",
                    "required": [
                        "url",
                        "html_url",
                        "key",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "key": {
                            "type": "string",
                            "examples": [
                                "contributor_covenant"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "examples": [
                                "Contributor Covenant"
                            ]
                        },
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant"
                            ]
                        },
                        "body": {
                            "type": "string",
                            "examples": [
                                "# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n"
                            ]
                        },
                        "html_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        }
                    },
                    "description": "Code Of Conduct"
                },
                "license": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "key": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "spdx_id": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        }
                    }
                },
                "forks": {
                    "type": "integer",
                    "examples": [
                        0
                    ]
                },
                "open_issues": {
                    "type": "integer",
                    "examples": [
                        0
                    ]
                },
                "watchers": {
                    "type": "integer",
                    "examples": [
                        0
                    ]
                },
                "allow_forking": {
                    "type": "boolean"
                }
            },
            "description": "Minimal Repository"
        }
    },
    "description": "Check suite configuration preferences for a repository."
}';
    public const SCHEMA_TITLE        = 'Check Suite Preference';
    public const SCHEMA_DESCRIPTION  = 'Check suite configuration preferences for a repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "preferences": {
        "auto_trigger_checks": [
            {
                "app_id": 6,
                "setting": false
            },
            {
                "app_id": 6,
                "setting": false
            }
        ]
    },
    "repository": {
        "id": 1296269,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Hello-World",
        "full_name": "octocat\\/Hello-World",
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
        "git_url": "generated",
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
        "ssh_url": "generated",
        "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
        "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
        "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
        "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
        "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
        "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
        "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
        "clone_url": "generated",
        "mirror_url": "generated",
        "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
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
        "pushed_at": "2011-01-26T19:06:43Z",
        "created_at": "2011-01-26T19:01:12Z",
        "updated_at": "2011-01-26T19:14:43Z",
        "permissions": {
            "admin": false,
            "maintain": false,
            "push": false,
            "triage": false,
            "pull": false
        },
        "template_repository": {
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
            "allow_update_branch": false,
            "allow_merge_commit": true,
            "allow_forking": false,
            "subscribers_count": 17,
            "network_count": 13,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\""
        },
        "temp_clone_token": "generated",
        "delete_branch_on_merge": false,
        "subscribers_count": 17,
        "network_count": 13,
        "code_of_conduct": {
            "key": "contributor_covenant",
            "name": "Contributor Covenant",
            "url": "https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant",
            "body": "# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n",
            "html_url": "https:\\/\\/example.com\\/"
        },
        "license": {
            "key": "generated",
            "name": "generated",
            "spdx_id": "generated",
            "url": "generated",
            "node_id": "generated"
        },
        "forks": 0,
        "open_issues": 0,
        "watchers": 0,
        "allow_forking": false
    }
}';

    /**
     * repository: Minimal Repository
     */
    public function __construct(public Schema\CheckSuitePreference\Preferences $preferences, public Schema\MinimalRepository $repository)
    {
    }
}
