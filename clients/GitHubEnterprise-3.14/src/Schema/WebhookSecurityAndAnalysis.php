<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class WebhookSecurityAndAnalysis
{
    public const SCHEMA_JSON         = '{
    "title": "security_and_analysis event",
    "required": [
        "changes",
        "repository"
    ],
    "type": "object",
    "properties": {
        "changes": {
            "type": "object",
            "properties": {
                "from": {
                    "type": "object",
                    "properties": {
                        "security_and_analysis": {
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "advanced_security": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                },
                                "dependabot_security_updates": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string",
                                            "description": "The enablement status of Dependabot security updates for the repository."
                                        }
                                    },
                                    "description": "Enable or disable Dependabot security updates for the repository."
                                },
                                "secret_scanning": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                },
                                "secret_scanning_push_protection": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "enterprise": {
            "title": "Enterprise",
            "required": [
                "id",
                "node_id",
                "name",
                "slug",
                "html_url",
                "created_at",
                "updated_at",
                "avatar_url"
            ],
            "type": "object",
            "properties": {
                "description": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A short description of the enterprise."
                },
                "html_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/github.com\\/enterprises\\/octo-business"
                    ]
                },
                "website_url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The enterprise\'s website URL.",
                    "format": "uri"
                },
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the enterprise",
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
                    "description": "The name of the enterprise.",
                    "examples": [
                        "Octo Business"
                    ]
                },
                "slug": {
                    "type": "string",
                    "description": "The slug url identifier for the enterprise.",
                    "examples": [
                        "octo-business"
                    ]
                },
                "created_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2019-01-26T19:01:12Z"
                    ]
                },
                "updated_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time",
                    "examples": [
                        "2019-01-26T19:14:43Z"
                    ]
                },
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                }
            },
            "description": "An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured\\non an enterprise account or an organization that\'s part of an enterprise account. For more information,\\nsee \\"[About enterprise accounts](https:\\/\\/docs.github.com\\/enterprise-server@3.14\\/admin\\/overview\\/about-enterprise-accounts).\\""
        },
        "installation": {
            "title": "Simple Installation",
            "required": [
                "id",
                "node_id"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "The ID of the installation.",
                    "examples": [
                        1
                    ]
                },
                "node_id": {
                    "type": "string",
                    "description": "The global node ID of the installation.",
                    "examples": [
                        "MDQ6VXNlcjU4MzIzMQ=="
                    ]
                }
            },
            "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/enterprise-server@3.14\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
        },
        "organization": {
            "title": "Organization Simple",
            "required": [
                "login",
                "url",
                "id",
                "node_id",
                "repos_url",
                "events_url",
                "hooks_url",
                "issues_url",
                "members_url",
                "public_members_url",
                "avatar_url",
                "description"
            ],
            "type": "object",
            "properties": {
                "login": {
                    "type": "string",
                    "examples": [
                        "github"
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
                        "MDEyOk9yZ2FuaXphdGlvbjE="
                    ]
                },
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github"
                    ]
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/repos"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/events"
                    ]
                },
                "hooks_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"
                    ]
                },
                "issues_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/issues"
                    ]
                },
                "members_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"
                    ]
                },
                "public_members_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"
                    ]
                },
                "avatar_url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                    ]
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "A great organization"
                    ]
                }
            },
            "description": "A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an\\norganization, or when the event occurs from activity in a repository owned by an organization."
        },
        "repository": {
            "title": "Full Repository",
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
                "has_issues",
                "has_projects",
                "has_wiki",
                "has_pages",
                "has_discussions",
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
                "updated_at",
                "network_count",
                "subscribers_count"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "format": "int64",
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
                    "examples": [
                        true
                    ]
                },
                "topics": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "examples": [
                        "octocat",
                        "atom",
                        "electron",
                        "API"
                    ]
                },
                "has_issues": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "has_projects": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "has_wiki": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "has_pages": {
                    "type": "boolean"
                },
                "has_downloads": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "has_discussions": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "archived": {
                    "type": "boolean"
                },
                "disabled": {
                    "type": "boolean",
                    "description": "Returns whether or not this repository disabled."
                },
                "visibility": {
                    "type": "string",
                    "description": "The repository visibility: public, private, or internal.",
                    "examples": [
                        "public"
                    ]
                },
                "pushed_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:06:43Z"
                    ]
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:01:12Z"
                    ]
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-01-26T19:14:43Z"
                    ]
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
                    "type": "boolean",
                    "examples": [
                        true
                    ]
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
                    ]
                },
                "temp_clone_token": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "allow_squash_merge": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "allow_auto_merge": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                },
                "delete_branch_on_merge": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                },
                "allow_merge_commit": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "allow_update_branch": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "use_squash_pr_title_as_default": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                },
                "squash_merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "COMMIT_OR_PR_TITLE"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit).",
                    "examples": [
                        "PR_TITLE"
                    ]
                },
                "squash_merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "COMMIT_MESSAGES",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message.",
                    "examples": [
                        "PR_BODY"
                    ]
                },
                "merge_commit_title": {
                    "enum": [
                        "PR_TITLE",
                        "MERGE_MESSAGE"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit title.\\n\\n  - `PR_TITLE` - default to the pull request\'s title.\\n  - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).",
                    "examples": [
                        "PR_TITLE"
                    ]
                },
                "merge_commit_message": {
                    "enum": [
                        "PR_BODY",
                        "PR_TITLE",
                        "BLANK"
                    ],
                    "type": "string",
                    "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message.",
                    "examples": [
                        "PR_BODY"
                    ]
                },
                "allow_forking": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "web_commit_signoff_required": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                },
                "subscribers_count": {
                    "type": "integer",
                    "examples": [
                        42
                    ]
                },
                "network_count": {
                    "type": "integer",
                    "examples": [
                        0
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
                        }
                    ]
                },
                "parent": {
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
                },
                "source": {
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
                },
                "forks": {
                    "type": "integer"
                },
                "master_branch": {
                    "type": "string"
                },
                "open_issues": {
                    "type": "integer"
                },
                "watchers": {
                    "type": "integer"
                },
                "anonymous_access_enabled": {
                    "type": "boolean",
                    "description": "Whether anonymous git access is allowed.",
                    "default": true
                },
                "code_of_conduct": {
                    "title": "Code Of Conduct Simple",
                    "required": [
                        "url",
                        "key",
                        "name",
                        "html_url"
                    ],
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"
                            ]
                        },
                        "key": {
                            "type": "string",
                            "examples": [
                                "citizen_code_of_conduct"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "examples": [
                                "Citizen Code of Conduct"
                            ]
                        },
                        "html_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"
                            ]
                        }
                    },
                    "description": "Code of Conduct Simple"
                },
                "security_and_analysis": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "advanced_security": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "enum": [
                                        "enabled",
                                        "disabled"
                                    ],
                                    "type": "string"
                                }
                            }
                        },
                        "dependabot_security_updates": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "enum": [
                                        "enabled",
                                        "disabled"
                                    ],
                                    "type": "string",
                                    "description": "The enablement status of Dependabot security updates for the repository."
                                }
                            },
                            "description": "Enable or disable Dependabot security updates for the repository."
                        },
                        "secret_scanning": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "enum": [
                                        "enabled",
                                        "disabled"
                                    ],
                                    "type": "string"
                                }
                            }
                        },
                        "secret_scanning_push_protection": {
                            "type": "object",
                            "properties": {
                                "status": {
                                    "enum": [
                                        "enabled",
                                        "disabled"
                                    ],
                                    "type": "string"
                                }
                            }
                        }
                    }
                },
                "custom_properties": {
                    "type": "object",
                    "description": "The custom properties that were defined for the repository. The keys are the custom property names, and the values are the corresponding custom property values.",
                    "additionalProperties": true
                }
            },
            "description": "Full Repository"
        },
        "sender": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = 'security_and_analysis event';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "changes": {
        "from": {
            "security_and_analysis": {
                "advanced_security": {
                    "status": "disabled"
                },
                "dependabot_security_updates": {
                    "status": "disabled"
                },
                "secret_scanning": {
                    "status": "disabled"
                },
                "secret_scanning_push_protection": {
                    "status": "disabled"
                }
            }
        }
    },
    "enterprise": {
        "description": "generated",
        "html_url": "https:\\/\\/github.com\\/enterprises\\/octo-business",
        "website_url": "https:\\/\\/example.com\\/",
        "id": 42,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Octo Business",
        "slug": "octo-business",
        "created_at": "2019-01-26T19:01:12Z",
        "updated_at": "2019-01-26T19:14:43Z",
        "avatar_url": "https:\\/\\/example.com\\/"
    },
    "installation": {
        "id": 1,
        "node_id": "MDQ6VXNlcjU4MzIzMQ=="
    },
    "organization": {
        "login": "github",
        "id": 1,
        "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
        "url": "https:\\/\\/api.github.com\\/orgs\\/github",
        "repos_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/events",
        "hooks_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks",
        "issues_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/issues",
        "members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}",
        "public_members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "description": "A great organization"
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
            "API",
            "API"
        ],
        "has_issues": true,
        "has_projects": true,
        "has_wiki": true,
        "has_pages": false,
        "has_downloads": true,
        "has_discussions": true,
        "archived": false,
        "disabled": false,
        "visibility": "public",
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
        "allow_rebase_merge": true,
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
        "temp_clone_token": "generated",
        "allow_squash_merge": true,
        "allow_auto_merge": false,
        "delete_branch_on_merge": false,
        "allow_merge_commit": true,
        "allow_update_branch": true,
        "use_squash_pr_title_as_default": false,
        "squash_merge_commit_title": "PR_TITLE",
        "squash_merge_commit_message": "PR_BODY",
        "merge_commit_title": "PR_TITLE",
        "merge_commit_message": "PR_BODY",
        "allow_forking": true,
        "web_commit_signoff_required": false,
        "subscribers_count": 42,
        "network_count": 0,
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
            "starred_at": "\\"2020-07-09T00:17:55Z\\"",
            "user_view_type": "public"
        },
        "parent": {
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
        "source": {
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
        "forks": 5,
        "master_branch": "generated",
        "open_issues": 11,
        "watchers": 8,
        "anonymous_access_enabled": false,
        "code_of_conduct": {
            "url": "https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct",
            "key": "citizen_code_of_conduct",
            "name": "Citizen Code of Conduct",
            "html_url": "https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"
        },
        "security_and_analysis": {
            "advanced_security": {
                "status": "disabled"
            },
            "dependabot_security_updates": {
                "status": "disabled"
            },
            "secret_scanning": {
                "status": "disabled"
            },
            "secret_scanning_push_protection": {
                "status": "disabled"
            }
        },
        "custom_properties": []
    },
    "sender": {
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
    }
}';

    /**
     * enterprise: An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured
    on an enterprise account or an organization that's part of an enterprise account. For more information,
    see "[About enterprise accounts](https://docs.github.com/enterprise-server@3.14/admin/overview/about-enterprise-accounts)."
     * installation: The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured
    for and sent to a GitHub App. For more information,
    see "[Using webhooks with GitHub Apps](https://docs.github.com/enterprise-server@3.14/apps/creating-github-apps/registering-a-github-app/using-webhooks-with-github-apps)."
     * organization: A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an
    organization, or when the event occurs from activity in a repository owned by an organization.
     * repository: Full Repository
     * sender: A GitHub user.
     */
    public function __construct(public Schema\WebhookSecurityAndAnalysis\Changes $changes, public Schema\EnterpriseWebhooks|null $enterprise, public Schema\SimpleInstallation|null $installation, public Schema\OrganizationSimpleWebhooks|null $organization, public Schema\FullRepository $repository, public Schema\SimpleUser|null $sender)
    {
    }
}
