<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class WebhookPullRequestReviewRequested
{
    public const SCHEMA_JSON         = '{
    "title": "pull_request review_requested event",
    "oneOf": [
        {
            "required": [
                "requested_reviewer",
                "action",
                "number",
                "pull_request",
                "repository",
                "sender"
            ],
            "type": "object",
            "properties": {
                "action": {
                    "enum": [
                        "review_requested"
                    ],
                    "type": "string"
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
                    "description": "An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured\\non an enterprise account or an organization that\'s part of an enterprise account. For more information,\\nsee \\"[About enterprise accounts](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/admin\\/overview\\/about-enterprise-accounts).\\""
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
                    "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
                },
                "number": {
                    "type": "integer",
                    "description": "The pull request number."
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
                "pull_request": {
                    "title": "Pull Request",
                    "required": [
                        "url",
                        "id",
                        "node_id",
                        "html_url",
                        "diff_url",
                        "patch_url",
                        "issue_url",
                        "number",
                        "state",
                        "locked",
                        "title",
                        "user",
                        "body",
                        "created_at",
                        "updated_at",
                        "closed_at",
                        "merged_at",
                        "merge_commit_sha",
                        "assignee",
                        "assignees",
                        "requested_reviewers",
                        "requested_teams",
                        "labels",
                        "milestone",
                        "commits_url",
                        "review_comments_url",
                        "review_comment_url",
                        "comments_url",
                        "statuses_url",
                        "head",
                        "base",
                        "_links",
                        "author_association",
                        "auto_merge",
                        "active_lock_reason",
                        "draft"
                    ],
                    "type": "object",
                    "properties": {
                        "_links": {
                            "required": [
                                "self",
                                "html",
                                "issue",
                                "comments",
                                "review_comments",
                                "review_comment",
                                "commits",
                                "statuses"
                            ],
                            "type": "object",
                            "properties": {
                                "comments": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "commits": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "html": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "issue": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "review_comment": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "review_comments": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "self": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "statuses": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                }
                            }
                        },
                        "active_lock_reason": {
                            "enum": [
                                "resolved",
                                "off-topic",
                                "too heated",
                                "spam",
                                null
                            ],
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "additions": {
                            "type": "integer"
                        },
                        "assignee": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization",
                                        "Mannequin"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        },
                        "assignees": {
                            "type": "array",
                            "items": {
                                "title": "User",
                                "required": [
                                    "login",
                                    "id"
                                ],
                                "type": [
                                    "object",
                                    "null"
                                ],
                                "properties": {
                                    "avatar_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "deleted": {
                                        "type": "boolean"
                                    },
                                    "email": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "events_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "followers_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "following_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "gists_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "gravatar_id": {
                                        "type": "string"
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "login": {
                                        "type": "string"
                                    },
                                    "name": {
                                        "type": "string"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "organizations_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "received_events_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "repos_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "site_admin": {
                                        "type": "boolean"
                                    },
                                    "starred_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "subscriptions_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "type": {
                                        "enum": [
                                            "Bot",
                                            "User",
                                            "Organization",
                                            "Mannequin"
                                        ],
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "user_view_type": {
                                        "type": "string"
                                    }
                                }
                            }
                        },
                        "author_association": {
                            "title": "AuthorAssociation",
                            "enum": [
                                "COLLABORATOR",
                                "CONTRIBUTOR",
                                "FIRST_TIMER",
                                "FIRST_TIME_CONTRIBUTOR",
                                "MANNEQUIN",
                                "MEMBER",
                                "NONE",
                                "OWNER"
                            ],
                            "type": "string",
                            "description": "How the author is associated with the repository."
                        },
                        "auto_merge": {
                            "title": "PullRequestAutoMerge",
                            "required": [
                                "enabled_by",
                                "merge_method",
                                "commit_title",
                                "commit_message"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "commit_message": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "Commit message for the merge commit."
                                },
                                "commit_title": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "Title for the merge commit message."
                                },
                                "enabled_by": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "merge_method": {
                                    "enum": [
                                        "merge",
                                        "squash",
                                        "rebase"
                                    ],
                                    "type": "string",
                                    "description": "The merge method to use."
                                }
                            },
                            "description": "The status of auto merging a pull request."
                        },
                        "base": {
                            "required": [
                                "label",
                                "ref",
                                "sha",
                                "user",
                                "repo"
                            ],
                            "type": "object",
                            "properties": {
                                "label": {
                                    "type": "string"
                                },
                                "ref": {
                                    "type": "string"
                                },
                                "repo": {
                                    "title": "Repository",
                                    "required": [
                                        "id",
                                        "node_id",
                                        "name",
                                        "full_name",
                                        "private",
                                        "owner",
                                        "html_url",
                                        "description",
                                        "fork",
                                        "url",
                                        "forks_url",
                                        "keys_url",
                                        "collaborators_url",
                                        "teams_url",
                                        "hooks_url",
                                        "issue_events_url",
                                        "events_url",
                                        "assignees_url",
                                        "branches_url",
                                        "tags_url",
                                        "blobs_url",
                                        "git_tags_url",
                                        "git_refs_url",
                                        "trees_url",
                                        "statuses_url",
                                        "languages_url",
                                        "stargazers_url",
                                        "contributors_url",
                                        "subscribers_url",
                                        "subscription_url",
                                        "commits_url",
                                        "git_commits_url",
                                        "comments_url",
                                        "issue_comment_url",
                                        "contents_url",
                                        "compare_url",
                                        "merges_url",
                                        "archive_url",
                                        "downloads_url",
                                        "issues_url",
                                        "pulls_url",
                                        "milestones_url",
                                        "notifications_url",
                                        "labels_url",
                                        "releases_url",
                                        "deployments_url",
                                        "created_at",
                                        "updated_at",
                                        "pushed_at",
                                        "git_url",
                                        "ssh_url",
                                        "clone_url",
                                        "svn_url",
                                        "homepage",
                                        "size",
                                        "stargazers_count",
                                        "watchers_count",
                                        "language",
                                        "has_issues",
                                        "has_projects",
                                        "has_downloads",
                                        "has_wiki",
                                        "has_pages",
                                        "has_discussions",
                                        "forks_count",
                                        "mirror_url",
                                        "archived",
                                        "open_issues_count",
                                        "license",
                                        "forks",
                                        "open_issues",
                                        "watchers",
                                        "default_branch",
                                        "topics",
                                        "visibility"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "allow_auto_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow auto-merge for pull requests.",
                                            "default": false
                                        },
                                        "allow_forking": {
                                            "type": "boolean",
                                            "description": "Whether to allow private forks"
                                        },
                                        "allow_merge_commit": {
                                            "type": "boolean",
                                            "description": "Whether to allow merge commits for pull requests.",
                                            "default": true
                                        },
                                        "allow_rebase_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow rebase merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_squash_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow squash merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_update_branch": {
                                            "type": "boolean"
                                        },
                                        "archive_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "archived": {
                                            "type": "boolean",
                                            "description": "Whether the repository is archived.",
                                            "default": false
                                        },
                                        "assignees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "blobs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "branches_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "clone_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "collaborators_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "comments_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "compare_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contents_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contributors_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "created_at": {
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "default_branch": {
                                            "type": "string",
                                            "description": "The default branch of the repository."
                                        },
                                        "delete_branch_on_merge": {
                                            "type": "boolean",
                                            "description": "Whether to delete head branches when pull requests are merged",
                                            "default": false
                                        },
                                        "deployments_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "description": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "disabled": {
                                            "type": "boolean",
                                            "description": "Returns whether or not this repository is disabled."
                                        },
                                        "downloads_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "fork": {
                                            "type": "boolean"
                                        },
                                        "forks": {
                                            "type": "integer"
                                        },
                                        "forks_count": {
                                            "type": "integer"
                                        },
                                        "forks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "full_name": {
                                            "type": "string"
                                        },
                                        "git_commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_refs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_tags_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "has_downloads": {
                                            "type": "boolean",
                                            "description": "Whether downloads are enabled.",
                                            "default": true
                                        },
                                        "has_issues": {
                                            "type": "boolean",
                                            "description": "Whether issues are enabled.",
                                            "default": true
                                        },
                                        "has_pages": {
                                            "type": "boolean"
                                        },
                                        "has_projects": {
                                            "type": "boolean",
                                            "description": "Whether projects are enabled.",
                                            "default": true
                                        },
                                        "has_wiki": {
                                            "type": "boolean",
                                            "description": "Whether the wiki is enabled.",
                                            "default": true
                                        },
                                        "has_discussions": {
                                            "type": "boolean",
                                            "description": "Whether discussions are enabled.",
                                            "default": false
                                        },
                                        "homepage": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "hooks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "description": "Unique identifier of the repository",
                                            "format": "int64"
                                        },
                                        "is_template": {
                                            "type": "boolean"
                                        },
                                        "issue_comment_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issue_events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issues_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "keys_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "labels_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "language": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "languages_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "license": {
                                            "title": "License",
                                            "required": [
                                                "key",
                                                "name",
                                                "spdx_id",
                                                "url",
                                                "node_id"
                                            ],
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
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "spdx_id": {
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ],
                                                    "format": "uri"
                                                }
                                            }
                                        },
                                        "master_branch": {
                                            "type": "string"
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
                                        "merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "MERGE_MESSAGE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                                        },
                                        "merges_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "milestones_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "mirror_url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri"
                                        },
                                        "name": {
                                            "type": "string",
                                            "description": "The name of the repository."
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "notifications_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "open_issues": {
                                            "type": "integer"
                                        },
                                        "open_issues_count": {
                                            "type": "integer"
                                        },
                                        "organization": {
                                            "type": "string"
                                        },
                                        "owner": {
                                            "title": "User",
                                            "required": [
                                                "login",
                                                "id"
                                            ],
                                            "type": [
                                                "object",
                                                "null"
                                            ],
                                            "properties": {
                                                "avatar_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "deleted": {
                                                    "type": "boolean"
                                                },
                                                "email": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ]
                                                },
                                                "events_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "followers_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "following_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gists_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gravatar_id": {
                                                    "type": "string"
                                                },
                                                "html_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "id": {
                                                    "type": "integer"
                                                },
                                                "login": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                },
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "organizations_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "received_events_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "repos_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "site_admin": {
                                                    "type": "boolean"
                                                },
                                                "starred_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "subscriptions_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "type": {
                                                    "enum": [
                                                        "Bot",
                                                        "User",
                                                        "Organization"
                                                    ],
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "user_view_type": {
                                                    "type": "string"
                                                }
                                            }
                                        },
                                        "permissions": {
                                            "required": [
                                                "pull",
                                                "push",
                                                "admin"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "admin": {
                                                    "type": "boolean"
                                                },
                                                "maintain": {
                                                    "type": "boolean"
                                                },
                                                "pull": {
                                                    "type": "boolean"
                                                },
                                                "push": {
                                                    "type": "boolean"
                                                },
                                                "triage": {
                                                    "type": "boolean"
                                                }
                                            }
                                        },
                                        "private": {
                                            "type": "boolean",
                                            "description": "Whether the repository is private or public."
                                        },
                                        "public": {
                                            "type": "boolean"
                                        },
                                        "pulls_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "pushed_at": {
                                            "type": [
                                                "null",
                                                "integer",
                                                "string"
                                            ],
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "releases_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "role_name": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "size": {
                                            "type": "integer"
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
                                        "squash_merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "COMMIT_OR_PR_TITLE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                                        },
                                        "ssh_url": {
                                            "type": "string"
                                        },
                                        "stargazers": {
                                            "type": "integer"
                                        },
                                        "stargazers_count": {
                                            "type": "integer"
                                        },
                                        "stargazers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "statuses_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscribers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "subscription_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "svn_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "tags_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "teams_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "topics": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            }
                                        },
                                        "trees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "updated_at": {
                                            "type": "string",
                                            "format": "date-time"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "use_squash_pr_title_as_default": {
                                            "type": "boolean",
                                            "description": "Whether a squash merge commit can use the pull request title as default. **This property is closing down. Please use `squash_merge_commit_title` instead.",
                                            "default": false
                                        },
                                        "visibility": {
                                            "enum": [
                                                "public",
                                                "private",
                                                "internal"
                                            ],
                                            "type": "string"
                                        },
                                        "watchers": {
                                            "type": "integer"
                                        },
                                        "watchers_count": {
                                            "type": "integer"
                                        },
                                        "web_commit_signoff_required": {
                                            "type": "boolean",
                                            "description": "Whether to require contributors to sign off on web-based commits"
                                        }
                                    },
                                    "description": "A git repository"
                                },
                                "sha": {
                                    "type": "string"
                                },
                                "user": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "format": "int64"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        },
                        "body": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "changed_files": {
                            "type": "integer"
                        },
                        "closed_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "comments": {
                            "type": "integer"
                        },
                        "comments_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "commits": {
                            "type": "integer"
                        },
                        "commits_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "created_at": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "deletions": {
                            "type": "integer"
                        },
                        "diff_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "draft": {
                            "type": "boolean",
                            "description": "Indicates whether or not the pull request is a draft."
                        },
                        "head": {
                            "required": [
                                "label",
                                "ref",
                                "sha",
                                "user",
                                "repo"
                            ],
                            "type": "object",
                            "properties": {
                                "label": {
                                    "type": "string"
                                },
                                "ref": {
                                    "type": "string"
                                },
                                "repo": {
                                    "title": "Repository",
                                    "required": [
                                        "id",
                                        "node_id",
                                        "name",
                                        "full_name",
                                        "private",
                                        "owner",
                                        "html_url",
                                        "description",
                                        "fork",
                                        "url",
                                        "forks_url",
                                        "keys_url",
                                        "collaborators_url",
                                        "teams_url",
                                        "hooks_url",
                                        "issue_events_url",
                                        "events_url",
                                        "assignees_url",
                                        "branches_url",
                                        "tags_url",
                                        "blobs_url",
                                        "git_tags_url",
                                        "git_refs_url",
                                        "trees_url",
                                        "statuses_url",
                                        "languages_url",
                                        "stargazers_url",
                                        "contributors_url",
                                        "subscribers_url",
                                        "subscription_url",
                                        "commits_url",
                                        "git_commits_url",
                                        "comments_url",
                                        "issue_comment_url",
                                        "contents_url",
                                        "compare_url",
                                        "merges_url",
                                        "archive_url",
                                        "downloads_url",
                                        "issues_url",
                                        "pulls_url",
                                        "milestones_url",
                                        "notifications_url",
                                        "labels_url",
                                        "releases_url",
                                        "deployments_url",
                                        "created_at",
                                        "updated_at",
                                        "pushed_at",
                                        "git_url",
                                        "ssh_url",
                                        "clone_url",
                                        "svn_url",
                                        "homepage",
                                        "size",
                                        "stargazers_count",
                                        "watchers_count",
                                        "language",
                                        "has_issues",
                                        "has_projects",
                                        "has_downloads",
                                        "has_wiki",
                                        "has_pages",
                                        "has_discussions",
                                        "forks_count",
                                        "mirror_url",
                                        "archived",
                                        "open_issues_count",
                                        "license",
                                        "forks",
                                        "open_issues",
                                        "watchers",
                                        "default_branch",
                                        "topics",
                                        "visibility"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "allow_auto_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow auto-merge for pull requests.",
                                            "default": false
                                        },
                                        "allow_forking": {
                                            "type": "boolean",
                                            "description": "Whether to allow private forks"
                                        },
                                        "allow_merge_commit": {
                                            "type": "boolean",
                                            "description": "Whether to allow merge commits for pull requests.",
                                            "default": true
                                        },
                                        "allow_rebase_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow rebase merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_squash_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow squash merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_update_branch": {
                                            "type": "boolean"
                                        },
                                        "archive_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "archived": {
                                            "type": "boolean",
                                            "description": "Whether the repository is archived.",
                                            "default": false
                                        },
                                        "assignees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "blobs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "branches_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "clone_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "collaborators_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "comments_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "compare_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contents_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contributors_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "created_at": {
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "default_branch": {
                                            "type": "string",
                                            "description": "The default branch of the repository."
                                        },
                                        "delete_branch_on_merge": {
                                            "type": "boolean",
                                            "description": "Whether to delete head branches when pull requests are merged",
                                            "default": false
                                        },
                                        "deployments_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "description": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "disabled": {
                                            "type": "boolean",
                                            "description": "Returns whether or not this repository is disabled."
                                        },
                                        "downloads_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "fork": {
                                            "type": "boolean"
                                        },
                                        "forks": {
                                            "type": "integer"
                                        },
                                        "forks_count": {
                                            "type": "integer"
                                        },
                                        "forks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "full_name": {
                                            "type": "string"
                                        },
                                        "git_commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_refs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_tags_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "has_downloads": {
                                            "type": "boolean",
                                            "description": "Whether downloads are enabled.",
                                            "default": true
                                        },
                                        "has_issues": {
                                            "type": "boolean",
                                            "description": "Whether issues are enabled.",
                                            "default": true
                                        },
                                        "has_pages": {
                                            "type": "boolean"
                                        },
                                        "has_projects": {
                                            "type": "boolean",
                                            "description": "Whether projects are enabled.",
                                            "default": true
                                        },
                                        "has_wiki": {
                                            "type": "boolean",
                                            "description": "Whether the wiki is enabled.",
                                            "default": true
                                        },
                                        "has_discussions": {
                                            "type": "boolean",
                                            "description": "Whether discussions are enabled.",
                                            "default": false
                                        },
                                        "homepage": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "hooks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "description": "Unique identifier of the repository",
                                            "format": "int64"
                                        },
                                        "is_template": {
                                            "type": "boolean"
                                        },
                                        "issue_comment_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issue_events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issues_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "keys_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "labels_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "language": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "languages_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "license": {
                                            "title": "License",
                                            "required": [
                                                "key",
                                                "name",
                                                "spdx_id",
                                                "url",
                                                "node_id"
                                            ],
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
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "spdx_id": {
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ],
                                                    "format": "uri"
                                                }
                                            }
                                        },
                                        "master_branch": {
                                            "type": "string"
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
                                        "merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "MERGE_MESSAGE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                                        },
                                        "merges_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "milestones_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "mirror_url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri"
                                        },
                                        "name": {
                                            "type": "string",
                                            "description": "The name of the repository."
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "notifications_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "open_issues": {
                                            "type": "integer"
                                        },
                                        "open_issues_count": {
                                            "type": "integer"
                                        },
                                        "organization": {
                                            "type": "string"
                                        },
                                        "owner": {
                                            "title": "User",
                                            "required": [
                                                "login",
                                                "id"
                                            ],
                                            "type": [
                                                "object",
                                                "null"
                                            ],
                                            "properties": {
                                                "avatar_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "deleted": {
                                                    "type": "boolean"
                                                },
                                                "email": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ]
                                                },
                                                "events_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "followers_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "following_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gists_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gravatar_id": {
                                                    "type": "string"
                                                },
                                                "html_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "id": {
                                                    "type": "integer"
                                                },
                                                "login": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                },
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "organizations_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "received_events_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "repos_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "site_admin": {
                                                    "type": "boolean"
                                                },
                                                "starred_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "subscriptions_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "type": {
                                                    "enum": [
                                                        "Bot",
                                                        "User",
                                                        "Organization"
                                                    ],
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "user_view_type": {
                                                    "type": "string"
                                                }
                                            }
                                        },
                                        "permissions": {
                                            "required": [
                                                "pull",
                                                "push",
                                                "admin"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "admin": {
                                                    "type": "boolean"
                                                },
                                                "maintain": {
                                                    "type": "boolean"
                                                },
                                                "pull": {
                                                    "type": "boolean"
                                                },
                                                "push": {
                                                    "type": "boolean"
                                                },
                                                "triage": {
                                                    "type": "boolean"
                                                }
                                            }
                                        },
                                        "private": {
                                            "type": "boolean",
                                            "description": "Whether the repository is private or public."
                                        },
                                        "public": {
                                            "type": "boolean"
                                        },
                                        "pulls_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "pushed_at": {
                                            "type": [
                                                "null",
                                                "integer",
                                                "string"
                                            ],
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "releases_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "role_name": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "size": {
                                            "type": "integer"
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
                                        "squash_merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "COMMIT_OR_PR_TITLE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                                        },
                                        "ssh_url": {
                                            "type": "string"
                                        },
                                        "stargazers": {
                                            "type": "integer"
                                        },
                                        "stargazers_count": {
                                            "type": "integer"
                                        },
                                        "stargazers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "statuses_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscribers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "subscription_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "svn_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "tags_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "teams_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "topics": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            }
                                        },
                                        "trees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "updated_at": {
                                            "type": "string",
                                            "format": "date-time"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "use_squash_pr_title_as_default": {
                                            "type": "boolean",
                                            "description": "Whether a squash merge commit can use the pull request title as default. **This property is closing down. Please use `squash_merge_commit_title` instead.",
                                            "default": false
                                        },
                                        "visibility": {
                                            "enum": [
                                                "public",
                                                "private",
                                                "internal"
                                            ],
                                            "type": "string"
                                        },
                                        "watchers": {
                                            "type": "integer"
                                        },
                                        "watchers_count": {
                                            "type": "integer"
                                        },
                                        "web_commit_signoff_required": {
                                            "type": "boolean",
                                            "description": "Whether to require contributors to sign off on web-based commits"
                                        }
                                    },
                                    "description": "A git repository"
                                },
                                "sha": {
                                    "type": "string"
                                },
                                "user": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "format": "int64"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "issue_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "labels": {
                            "type": "array",
                            "items": {
                                "title": "Label",
                                "required": [
                                    "id",
                                    "node_id",
                                    "url",
                                    "name",
                                    "color",
                                    "default",
                                    "description"
                                ],
                                "type": "object",
                                "properties": {
                                    "color": {
                                        "type": "string",
                                        "description": "6-character hex code, without the leading #, identifying the color"
                                    },
                                    "default": {
                                        "type": "boolean"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the label."
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the label",
                                        "format": "uri"
                                    }
                                }
                            }
                        },
                        "locked": {
                            "type": "boolean"
                        },
                        "maintainer_can_modify": {
                            "type": "boolean",
                            "description": "Indicates whether maintainers can modify the pull request."
                        },
                        "merge_commit_sha": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "mergeable": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "mergeable_state": {
                            "type": "string"
                        },
                        "merged": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "merged_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "merged_by": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        },
                        "milestone": {
                            "title": "Milestone",
                            "required": [
                                "url",
                                "html_url",
                                "labels_url",
                                "id",
                                "node_id",
                                "number",
                                "title",
                                "description",
                                "creator",
                                "open_issues",
                                "closed_issues",
                                "state",
                                "created_at",
                                "updated_at",
                                "due_on",
                                "closed_at"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "closed_at": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time"
                                },
                                "closed_issues": {
                                    "type": "integer"
                                },
                                "created_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "creator": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization",
                                                "Mannequin"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "due_on": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "labels_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "number": {
                                    "type": "integer",
                                    "description": "The number of the milestone."
                                },
                                "open_issues": {
                                    "type": "integer"
                                },
                                "state": {
                                    "enum": [
                                        "open",
                                        "closed"
                                    ],
                                    "type": "string",
                                    "description": "The state of the milestone."
                                },
                                "title": {
                                    "type": "string",
                                    "description": "The title of the milestone."
                                },
                                "updated_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            },
                            "description": "A collection of related issues and pull requests."
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "number": {
                            "type": "integer",
                            "description": "Number uniquely identifying the pull request within its repository."
                        },
                        "patch_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "rebaseable": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "requested_reviewers": {
                            "type": "array",
                            "items": {
                                "oneOf": [
                                    {
                                        "title": "User",
                                        "required": [
                                            "login",
                                            "id"
                                        ],
                                        "type": [
                                            "object",
                                            "null"
                                        ],
                                        "properties": {
                                            "avatar_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "deleted": {
                                                "type": "boolean"
                                            },
                                            "email": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ]
                                            },
                                            "events_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "followers_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "following_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "gists_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "gravatar_id": {
                                                "type": "string"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer"
                                            },
                                            "login": {
                                                "type": "string"
                                            },
                                            "name": {
                                                "type": "string"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "organizations_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "received_events_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "repos_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "site_admin": {
                                                "type": "boolean"
                                            },
                                            "starred_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "subscriptions_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "type": {
                                                "enum": [
                                                    "Bot",
                                                    "User",
                                                    "Organization"
                                                ],
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "user_view_type": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    {
                                        "title": "Team",
                                        "required": [
                                            "name",
                                            "id",
                                            "node_id",
                                            "slug",
                                            "description",
                                            "privacy",
                                            "url",
                                            "html_url",
                                            "members_url",
                                            "repositories_url",
                                            "permission"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "deleted": {
                                                "type": "boolean"
                                            },
                                            "description": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ],
                                                "description": "Description of the team"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer",
                                                "description": "Unique identifier of the team"
                                            },
                                            "members_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "name": {
                                                "type": "string",
                                                "description": "Name of the team"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "parent": {
                                                "required": [
                                                    "name",
                                                    "id",
                                                    "node_id",
                                                    "slug",
                                                    "description",
                                                    "privacy",
                                                    "url",
                                                    "html_url",
                                                    "members_url",
                                                    "repositories_url",
                                                    "permission"
                                                ],
                                                "type": [
                                                    "object",
                                                    "null"
                                                ],
                                                "properties": {
                                                    "description": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "Description of the team"
                                                    },
                                                    "html_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    },
                                                    "id": {
                                                        "type": "integer",
                                                        "description": "Unique identifier of the team"
                                                    },
                                                    "members_url": {
                                                        "type": "string",
                                                        "format": "uri-template"
                                                    },
                                                    "name": {
                                                        "type": "string",
                                                        "description": "Name of the team"
                                                    },
                                                    "node_id": {
                                                        "type": "string"
                                                    },
                                                    "permission": {
                                                        "type": "string",
                                                        "description": "Permission that the team will have for its repositories"
                                                    },
                                                    "privacy": {
                                                        "enum": [
                                                            "open",
                                                            "closed",
                                                            "secret"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "repositories_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    },
                                                    "slug": {
                                                        "type": "string"
                                                    },
                                                    "url": {
                                                        "type": "string",
                                                        "description": "URL for the team",
                                                        "format": "uri"
                                                    }
                                                }
                                            },
                                            "permission": {
                                                "type": "string",
                                                "description": "Permission that the team will have for its repositories"
                                            },
                                            "privacy": {
                                                "enum": [
                                                    "open",
                                                    "closed",
                                                    "secret"
                                                ],
                                                "type": "string"
                                            },
                                            "repositories_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "slug": {
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "description": "URL for the team",
                                                "format": "uri"
                                            }
                                        },
                                        "description": "Groups of organization members that gives permissions on specified repositories."
                                    }
                                ]
                            }
                        },
                        "requested_teams": {
                            "type": "array",
                            "items": {
                                "title": "Team",
                                "required": [
                                    "name",
                                    "id"
                                ],
                                "type": "object",
                                "properties": {
                                    "deleted": {
                                        "type": "boolean"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "description": "Description of the team"
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "id": {
                                        "type": "integer",
                                        "description": "Unique identifier of the team"
                                    },
                                    "members_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "Name of the team"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "parent": {
                                        "required": [
                                            "name",
                                            "id",
                                            "node_id",
                                            "slug",
                                            "description",
                                            "privacy",
                                            "url",
                                            "html_url",
                                            "members_url",
                                            "repositories_url",
                                            "permission"
                                        ],
                                        "type": [
                                            "object",
                                            "null"
                                        ],
                                        "properties": {
                                            "description": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ],
                                                "description": "Description of the team"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer",
                                                "description": "Unique identifier of the team"
                                            },
                                            "members_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "name": {
                                                "type": "string",
                                                "description": "Name of the team"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "permission": {
                                                "type": "string",
                                                "description": "Permission that the team will have for its repositories"
                                            },
                                            "privacy": {
                                                "enum": [
                                                    "open",
                                                    "closed",
                                                    "secret"
                                                ],
                                                "type": "string"
                                            },
                                            "repositories_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "slug": {
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "description": "URL for the team",
                                                "format": "uri"
                                            }
                                        }
                                    },
                                    "permission": {
                                        "type": "string",
                                        "description": "Permission that the team will have for its repositories"
                                    },
                                    "privacy": {
                                        "enum": [
                                            "open",
                                            "closed",
                                            "secret"
                                        ],
                                        "type": "string"
                                    },
                                    "repositories_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "slug": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the team",
                                        "format": "uri"
                                    }
                                },
                                "description": "Groups of organization members that gives permissions on specified repositories."
                            }
                        },
                        "review_comment_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "review_comments": {
                            "type": "integer"
                        },
                        "review_comments_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "state": {
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "type": "string",
                            "description": "State of this Pull Request. Either `open` or `closed`."
                        },
                        "statuses_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "title": {
                            "type": "string",
                            "description": "The title of the pull request."
                        },
                        "updated_at": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "user": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer",
                                    "format": "int64"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization",
                                        "Mannequin"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        }
                    }
                },
                "repository": {
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
                        "custom_properties": {
                            "type": "object",
                            "description": "The custom properties that were defined for the repository. The keys are the custom property names, and the values are the corresponding custom property values.",
                            "additionalProperties": true
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
                                "allow_auto_merge": {
                                    "type": "boolean"
                                },
                                "delete_branch_on_merge": {
                                    "type": "boolean"
                                },
                                "allow_update_branch": {
                                    "type": "boolean"
                                },
                                "use_squash_pr_title_as_default": {
                                    "type": "boolean"
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
                        },
                        "anonymous_access_enabled": {
                            "type": "boolean",
                            "description": "Whether anonymous git access is enabled for this repository"
                        }
                    },
                    "description": "The repository on GitHub where the event occurred. Webhook payloads contain the `repository` property\\nwhen the event occurs from activity in a repository."
                },
                "requested_reviewer": {
                    "title": "User",
                    "required": [
                        "login",
                        "id"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "avatar_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "deleted": {
                            "type": "boolean"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "followers_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "following_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gists_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "received_events_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "repos_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "subscriptions_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "type": {
                            "enum": [
                                "Bot",
                                "User",
                                "Organization",
                                "Mannequin"
                            ],
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
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
        },
        {
            "required": [
                "requested_team",
                "action",
                "number",
                "pull_request",
                "repository",
                "sender"
            ],
            "type": "object",
            "properties": {
                "action": {
                    "enum": [
                        "review_requested"
                    ],
                    "type": "string"
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
                    "description": "An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured\\non an enterprise account or an organization that\'s part of an enterprise account. For more information,\\nsee \\"[About enterprise accounts](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/admin\\/overview\\/about-enterprise-accounts).\\""
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
                    "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/enterprise-cloud@latest\\/\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
                },
                "number": {
                    "type": "integer",
                    "description": "The pull request number."
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
                "pull_request": {
                    "title": "Pull Request",
                    "required": [
                        "url",
                        "id",
                        "node_id",
                        "html_url",
                        "diff_url",
                        "patch_url",
                        "issue_url",
                        "number",
                        "state",
                        "locked",
                        "title",
                        "user",
                        "body",
                        "created_at",
                        "updated_at",
                        "closed_at",
                        "merged_at",
                        "merge_commit_sha",
                        "assignee",
                        "assignees",
                        "requested_reviewers",
                        "requested_teams",
                        "labels",
                        "milestone",
                        "commits_url",
                        "review_comments_url",
                        "review_comment_url",
                        "comments_url",
                        "statuses_url",
                        "head",
                        "base",
                        "_links",
                        "author_association",
                        "auto_merge",
                        "active_lock_reason",
                        "draft"
                    ],
                    "type": "object",
                    "properties": {
                        "_links": {
                            "required": [
                                "self",
                                "html",
                                "issue",
                                "comments",
                                "review_comments",
                                "review_comment",
                                "commits",
                                "statuses"
                            ],
                            "type": "object",
                            "properties": {
                                "comments": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "commits": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "html": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "issue": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "review_comment": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "review_comments": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "self": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                },
                                "statuses": {
                                    "title": "Link",
                                    "required": [
                                        "href"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "href": {
                                            "type": "string",
                                            "format": "uri-template"
                                        }
                                    }
                                }
                            }
                        },
                        "active_lock_reason": {
                            "enum": [
                                "resolved",
                                "off-topic",
                                "too heated",
                                "spam",
                                null
                            ],
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "additions": {
                            "type": "integer"
                        },
                        "assignee": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization",
                                        "Mannequin"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        },
                        "assignees": {
                            "type": "array",
                            "items": {
                                "title": "User",
                                "required": [
                                    "login",
                                    "id"
                                ],
                                "type": [
                                    "object",
                                    "null"
                                ],
                                "properties": {
                                    "avatar_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "deleted": {
                                        "type": "boolean"
                                    },
                                    "email": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "events_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "followers_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "following_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "gists_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "gravatar_id": {
                                        "type": "string"
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "login": {
                                        "type": "string"
                                    },
                                    "name": {
                                        "type": "string"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "organizations_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "received_events_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "repos_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "site_admin": {
                                        "type": "boolean"
                                    },
                                    "starred_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "subscriptions_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "type": {
                                        "enum": [
                                            "Bot",
                                            "User",
                                            "Organization",
                                            "Mannequin"
                                        ],
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "user_view_type": {
                                        "type": "string"
                                    }
                                }
                            }
                        },
                        "author_association": {
                            "title": "AuthorAssociation",
                            "enum": [
                                "COLLABORATOR",
                                "CONTRIBUTOR",
                                "FIRST_TIMER",
                                "FIRST_TIME_CONTRIBUTOR",
                                "MANNEQUIN",
                                "MEMBER",
                                "NONE",
                                "OWNER"
                            ],
                            "type": "string",
                            "description": "How the author is associated with the repository."
                        },
                        "auto_merge": {
                            "title": "PullRequestAutoMerge",
                            "required": [
                                "enabled_by",
                                "merge_method",
                                "commit_title",
                                "commit_message"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "commit_message": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "Commit message for the merge commit."
                                },
                                "commit_title": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "Title for the merge commit message."
                                },
                                "enabled_by": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "merge_method": {
                                    "enum": [
                                        "merge",
                                        "squash",
                                        "rebase"
                                    ],
                                    "type": "string",
                                    "description": "The merge method to use."
                                }
                            },
                            "description": "The status of auto merging a pull request."
                        },
                        "base": {
                            "required": [
                                "label",
                                "ref",
                                "sha",
                                "user",
                                "repo"
                            ],
                            "type": "object",
                            "properties": {
                                "label": {
                                    "type": "string"
                                },
                                "ref": {
                                    "type": "string"
                                },
                                "repo": {
                                    "title": "Repository",
                                    "required": [
                                        "id",
                                        "node_id",
                                        "name",
                                        "full_name",
                                        "private",
                                        "owner",
                                        "html_url",
                                        "description",
                                        "fork",
                                        "url",
                                        "forks_url",
                                        "keys_url",
                                        "collaborators_url",
                                        "teams_url",
                                        "hooks_url",
                                        "issue_events_url",
                                        "events_url",
                                        "assignees_url",
                                        "branches_url",
                                        "tags_url",
                                        "blobs_url",
                                        "git_tags_url",
                                        "git_refs_url",
                                        "trees_url",
                                        "statuses_url",
                                        "languages_url",
                                        "stargazers_url",
                                        "contributors_url",
                                        "subscribers_url",
                                        "subscription_url",
                                        "commits_url",
                                        "git_commits_url",
                                        "comments_url",
                                        "issue_comment_url",
                                        "contents_url",
                                        "compare_url",
                                        "merges_url",
                                        "archive_url",
                                        "downloads_url",
                                        "issues_url",
                                        "pulls_url",
                                        "milestones_url",
                                        "notifications_url",
                                        "labels_url",
                                        "releases_url",
                                        "deployments_url",
                                        "created_at",
                                        "updated_at",
                                        "pushed_at",
                                        "git_url",
                                        "ssh_url",
                                        "clone_url",
                                        "svn_url",
                                        "homepage",
                                        "size",
                                        "stargazers_count",
                                        "watchers_count",
                                        "language",
                                        "has_issues",
                                        "has_projects",
                                        "has_downloads",
                                        "has_wiki",
                                        "has_pages",
                                        "has_discussions",
                                        "forks_count",
                                        "mirror_url",
                                        "archived",
                                        "open_issues_count",
                                        "license",
                                        "forks",
                                        "open_issues",
                                        "watchers",
                                        "default_branch",
                                        "topics",
                                        "visibility"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "allow_auto_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow auto-merge for pull requests.",
                                            "default": false
                                        },
                                        "allow_forking": {
                                            "type": "boolean",
                                            "description": "Whether to allow private forks"
                                        },
                                        "allow_merge_commit": {
                                            "type": "boolean",
                                            "description": "Whether to allow merge commits for pull requests.",
                                            "default": true
                                        },
                                        "allow_rebase_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow rebase merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_squash_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow squash merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_update_branch": {
                                            "type": "boolean"
                                        },
                                        "archive_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "archived": {
                                            "type": "boolean",
                                            "description": "Whether the repository is archived.",
                                            "default": false
                                        },
                                        "assignees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "blobs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "branches_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "clone_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "collaborators_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "comments_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "compare_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contents_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contributors_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "created_at": {
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "default_branch": {
                                            "type": "string",
                                            "description": "The default branch of the repository."
                                        },
                                        "delete_branch_on_merge": {
                                            "type": "boolean",
                                            "description": "Whether to delete head branches when pull requests are merged",
                                            "default": false
                                        },
                                        "deployments_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "description": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "disabled": {
                                            "type": "boolean",
                                            "description": "Returns whether or not this repository is disabled."
                                        },
                                        "downloads_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "fork": {
                                            "type": "boolean"
                                        },
                                        "forks": {
                                            "type": "integer"
                                        },
                                        "forks_count": {
                                            "type": "integer"
                                        },
                                        "forks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "full_name": {
                                            "type": "string"
                                        },
                                        "git_commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_refs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_tags_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "has_downloads": {
                                            "type": "boolean",
                                            "description": "Whether downloads are enabled.",
                                            "default": true
                                        },
                                        "has_issues": {
                                            "type": "boolean",
                                            "description": "Whether issues are enabled.",
                                            "default": true
                                        },
                                        "has_pages": {
                                            "type": "boolean"
                                        },
                                        "has_projects": {
                                            "type": "boolean",
                                            "description": "Whether projects are enabled.",
                                            "default": true
                                        },
                                        "has_wiki": {
                                            "type": "boolean",
                                            "description": "Whether the wiki is enabled.",
                                            "default": true
                                        },
                                        "has_discussions": {
                                            "type": "boolean",
                                            "description": "Whether discussions are enabled.",
                                            "default": false
                                        },
                                        "homepage": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "hooks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "description": "Unique identifier of the repository",
                                            "format": "int64"
                                        },
                                        "is_template": {
                                            "type": "boolean"
                                        },
                                        "issue_comment_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issue_events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issues_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "keys_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "labels_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "language": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "languages_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "license": {
                                            "title": "License",
                                            "required": [
                                                "key",
                                                "name",
                                                "spdx_id",
                                                "url",
                                                "node_id"
                                            ],
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
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "spdx_id": {
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ],
                                                    "format": "uri"
                                                }
                                            }
                                        },
                                        "master_branch": {
                                            "type": "string"
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
                                        "merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "MERGE_MESSAGE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                                        },
                                        "merges_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "milestones_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "mirror_url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri"
                                        },
                                        "name": {
                                            "type": "string",
                                            "description": "The name of the repository."
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "notifications_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "open_issues": {
                                            "type": "integer"
                                        },
                                        "open_issues_count": {
                                            "type": "integer"
                                        },
                                        "organization": {
                                            "type": "string"
                                        },
                                        "owner": {
                                            "title": "User",
                                            "required": [
                                                "login",
                                                "id"
                                            ],
                                            "type": [
                                                "object",
                                                "null"
                                            ],
                                            "properties": {
                                                "avatar_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "deleted": {
                                                    "type": "boolean"
                                                },
                                                "email": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ]
                                                },
                                                "events_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "followers_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "following_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gists_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gravatar_id": {
                                                    "type": "string"
                                                },
                                                "html_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "id": {
                                                    "type": "integer"
                                                },
                                                "login": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                },
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "organizations_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "received_events_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "repos_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "site_admin": {
                                                    "type": "boolean"
                                                },
                                                "starred_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "subscriptions_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "type": {
                                                    "enum": [
                                                        "Bot",
                                                        "User",
                                                        "Organization"
                                                    ],
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "user_view_type": {
                                                    "type": "string"
                                                }
                                            }
                                        },
                                        "permissions": {
                                            "required": [
                                                "pull",
                                                "push",
                                                "admin"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "admin": {
                                                    "type": "boolean"
                                                },
                                                "maintain": {
                                                    "type": "boolean"
                                                },
                                                "pull": {
                                                    "type": "boolean"
                                                },
                                                "push": {
                                                    "type": "boolean"
                                                },
                                                "triage": {
                                                    "type": "boolean"
                                                }
                                            }
                                        },
                                        "private": {
                                            "type": "boolean",
                                            "description": "Whether the repository is private or public."
                                        },
                                        "public": {
                                            "type": "boolean"
                                        },
                                        "pulls_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "pushed_at": {
                                            "type": [
                                                "null",
                                                "integer",
                                                "string"
                                            ],
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "releases_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "role_name": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "size": {
                                            "type": "integer"
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
                                        "squash_merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "COMMIT_OR_PR_TITLE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                                        },
                                        "ssh_url": {
                                            "type": "string"
                                        },
                                        "stargazers": {
                                            "type": "integer"
                                        },
                                        "stargazers_count": {
                                            "type": "integer"
                                        },
                                        "stargazers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "statuses_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscribers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "subscription_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "svn_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "tags_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "teams_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "topics": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            }
                                        },
                                        "trees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "updated_at": {
                                            "type": "string",
                                            "format": "date-time"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "use_squash_pr_title_as_default": {
                                            "type": "boolean",
                                            "description": "Whether a squash merge commit can use the pull request title as default. **This property is closing down. Please use `squash_merge_commit_title` instead.",
                                            "default": false
                                        },
                                        "visibility": {
                                            "enum": [
                                                "public",
                                                "private",
                                                "internal"
                                            ],
                                            "type": "string"
                                        },
                                        "watchers": {
                                            "type": "integer"
                                        },
                                        "watchers_count": {
                                            "type": "integer"
                                        },
                                        "web_commit_signoff_required": {
                                            "type": "boolean",
                                            "description": "Whether to require contributors to sign off on web-based commits"
                                        }
                                    },
                                    "description": "A git repository"
                                },
                                "sha": {
                                    "type": "string"
                                },
                                "user": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "format": "int64"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        },
                        "body": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "changed_files": {
                            "type": "integer"
                        },
                        "closed_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "comments": {
                            "type": "integer"
                        },
                        "comments_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "commits": {
                            "type": "integer"
                        },
                        "commits_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "created_at": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "deletions": {
                            "type": "integer"
                        },
                        "diff_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "draft": {
                            "type": "boolean",
                            "description": "Indicates whether or not the pull request is a draft."
                        },
                        "head": {
                            "required": [
                                "label",
                                "ref",
                                "sha",
                                "user",
                                "repo"
                            ],
                            "type": "object",
                            "properties": {
                                "label": {
                                    "type": "string"
                                },
                                "ref": {
                                    "type": "string"
                                },
                                "repo": {
                                    "title": "Repository",
                                    "required": [
                                        "id",
                                        "node_id",
                                        "name",
                                        "full_name",
                                        "private",
                                        "owner",
                                        "html_url",
                                        "description",
                                        "fork",
                                        "url",
                                        "forks_url",
                                        "keys_url",
                                        "collaborators_url",
                                        "teams_url",
                                        "hooks_url",
                                        "issue_events_url",
                                        "events_url",
                                        "assignees_url",
                                        "branches_url",
                                        "tags_url",
                                        "blobs_url",
                                        "git_tags_url",
                                        "git_refs_url",
                                        "trees_url",
                                        "statuses_url",
                                        "languages_url",
                                        "stargazers_url",
                                        "contributors_url",
                                        "subscribers_url",
                                        "subscription_url",
                                        "commits_url",
                                        "git_commits_url",
                                        "comments_url",
                                        "issue_comment_url",
                                        "contents_url",
                                        "compare_url",
                                        "merges_url",
                                        "archive_url",
                                        "downloads_url",
                                        "issues_url",
                                        "pulls_url",
                                        "milestones_url",
                                        "notifications_url",
                                        "labels_url",
                                        "releases_url",
                                        "deployments_url",
                                        "created_at",
                                        "updated_at",
                                        "pushed_at",
                                        "git_url",
                                        "ssh_url",
                                        "clone_url",
                                        "svn_url",
                                        "homepage",
                                        "size",
                                        "stargazers_count",
                                        "watchers_count",
                                        "language",
                                        "has_issues",
                                        "has_projects",
                                        "has_downloads",
                                        "has_wiki",
                                        "has_pages",
                                        "has_discussions",
                                        "forks_count",
                                        "mirror_url",
                                        "archived",
                                        "open_issues_count",
                                        "license",
                                        "forks",
                                        "open_issues",
                                        "watchers",
                                        "default_branch",
                                        "topics",
                                        "visibility"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "allow_auto_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow auto-merge for pull requests.",
                                            "default": false
                                        },
                                        "allow_forking": {
                                            "type": "boolean",
                                            "description": "Whether to allow private forks"
                                        },
                                        "allow_merge_commit": {
                                            "type": "boolean",
                                            "description": "Whether to allow merge commits for pull requests.",
                                            "default": true
                                        },
                                        "allow_rebase_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow rebase merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_squash_merge": {
                                            "type": "boolean",
                                            "description": "Whether to allow squash merges for pull requests.",
                                            "default": true
                                        },
                                        "allow_update_branch": {
                                            "type": "boolean"
                                        },
                                        "archive_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "archived": {
                                            "type": "boolean",
                                            "description": "Whether the repository is archived.",
                                            "default": false
                                        },
                                        "assignees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "blobs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "branches_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "clone_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "collaborators_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "comments_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "compare_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contents_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "contributors_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "created_at": {
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "default_branch": {
                                            "type": "string",
                                            "description": "The default branch of the repository."
                                        },
                                        "delete_branch_on_merge": {
                                            "type": "boolean",
                                            "description": "Whether to delete head branches when pull requests are merged",
                                            "default": false
                                        },
                                        "deployments_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "description": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "disabled": {
                                            "type": "boolean",
                                            "description": "Returns whether or not this repository is disabled."
                                        },
                                        "downloads_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "fork": {
                                            "type": "boolean"
                                        },
                                        "forks": {
                                            "type": "integer"
                                        },
                                        "forks_count": {
                                            "type": "integer"
                                        },
                                        "forks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "full_name": {
                                            "type": "string"
                                        },
                                        "git_commits_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_refs_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_tags_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "git_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "has_downloads": {
                                            "type": "boolean",
                                            "description": "Whether downloads are enabled.",
                                            "default": true
                                        },
                                        "has_issues": {
                                            "type": "boolean",
                                            "description": "Whether issues are enabled.",
                                            "default": true
                                        },
                                        "has_pages": {
                                            "type": "boolean"
                                        },
                                        "has_projects": {
                                            "type": "boolean",
                                            "description": "Whether projects are enabled.",
                                            "default": true
                                        },
                                        "has_wiki": {
                                            "type": "boolean",
                                            "description": "Whether the wiki is enabled.",
                                            "default": true
                                        },
                                        "has_discussions": {
                                            "type": "boolean",
                                            "description": "Whether discussions are enabled.",
                                            "default": false
                                        },
                                        "homepage": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "hooks_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "description": "Unique identifier of the repository",
                                            "format": "int64"
                                        },
                                        "is_template": {
                                            "type": "boolean"
                                        },
                                        "issue_comment_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issue_events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "issues_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "keys_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "labels_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "language": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "languages_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "license": {
                                            "title": "License",
                                            "required": [
                                                "key",
                                                "name",
                                                "spdx_id",
                                                "url",
                                                "node_id"
                                            ],
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
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "spdx_id": {
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ],
                                                    "format": "uri"
                                                }
                                            }
                                        },
                                        "master_branch": {
                                            "type": "string"
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
                                        "merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "MERGE_MESSAGE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                                        },
                                        "merges_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "milestones_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "mirror_url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri"
                                        },
                                        "name": {
                                            "type": "string",
                                            "description": "The name of the repository."
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "notifications_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "open_issues": {
                                            "type": "integer"
                                        },
                                        "open_issues_count": {
                                            "type": "integer"
                                        },
                                        "organization": {
                                            "type": "string"
                                        },
                                        "owner": {
                                            "title": "User",
                                            "required": [
                                                "login",
                                                "id"
                                            ],
                                            "type": [
                                                "object",
                                                "null"
                                            ],
                                            "properties": {
                                                "avatar_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "deleted": {
                                                    "type": "boolean"
                                                },
                                                "email": {
                                                    "type": [
                                                        "string",
                                                        "null"
                                                    ]
                                                },
                                                "events_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "followers_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "following_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gists_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "gravatar_id": {
                                                    "type": "string"
                                                },
                                                "html_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "id": {
                                                    "type": "integer"
                                                },
                                                "login": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                },
                                                "node_id": {
                                                    "type": "string"
                                                },
                                                "organizations_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "received_events_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "repos_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "site_admin": {
                                                    "type": "boolean"
                                                },
                                                "starred_url": {
                                                    "type": "string",
                                                    "format": "uri-template"
                                                },
                                                "subscriptions_url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "type": {
                                                    "enum": [
                                                        "Bot",
                                                        "User",
                                                        "Organization"
                                                    ],
                                                    "type": "string"
                                                },
                                                "url": {
                                                    "type": "string",
                                                    "format": "uri"
                                                },
                                                "user_view_type": {
                                                    "type": "string"
                                                }
                                            }
                                        },
                                        "permissions": {
                                            "required": [
                                                "pull",
                                                "push",
                                                "admin"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "admin": {
                                                    "type": "boolean"
                                                },
                                                "maintain": {
                                                    "type": "boolean"
                                                },
                                                "pull": {
                                                    "type": "boolean"
                                                },
                                                "push": {
                                                    "type": "boolean"
                                                },
                                                "triage": {
                                                    "type": "boolean"
                                                }
                                            }
                                        },
                                        "private": {
                                            "type": "boolean",
                                            "description": "Whether the repository is private or public."
                                        },
                                        "public": {
                                            "type": "boolean"
                                        },
                                        "pulls_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "pushed_at": {
                                            "type": [
                                                "null",
                                                "integer",
                                                "string"
                                            ],
                                            "oneOf": [
                                                {
                                                    "type": "integer"
                                                },
                                                {
                                                    "type": "string",
                                                    "format": "date-time"
                                                }
                                            ]
                                        },
                                        "releases_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "role_name": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "size": {
                                            "type": "integer"
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
                                        "squash_merge_commit_title": {
                                            "enum": [
                                                "PR_TITLE",
                                                "COMMIT_OR_PR_TITLE"
                                            ],
                                            "type": "string",
                                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                                        },
                                        "ssh_url": {
                                            "type": "string"
                                        },
                                        "stargazers": {
                                            "type": "integer"
                                        },
                                        "stargazers_count": {
                                            "type": "integer"
                                        },
                                        "stargazers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "statuses_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscribers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "subscription_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "svn_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "tags_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "teams_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "topics": {
                                            "type": "array",
                                            "items": {
                                                "type": "string"
                                            }
                                        },
                                        "trees_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "updated_at": {
                                            "type": "string",
                                            "format": "date-time"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "use_squash_pr_title_as_default": {
                                            "type": "boolean",
                                            "description": "Whether a squash merge commit can use the pull request title as default. **This property is closing down. Please use `squash_merge_commit_title` instead.",
                                            "default": false
                                        },
                                        "visibility": {
                                            "enum": [
                                                "public",
                                                "private",
                                                "internal"
                                            ],
                                            "type": "string"
                                        },
                                        "watchers": {
                                            "type": "integer"
                                        },
                                        "watchers_count": {
                                            "type": "integer"
                                        },
                                        "web_commit_signoff_required": {
                                            "type": "boolean",
                                            "description": "Whether to require contributors to sign off on web-based commits"
                                        }
                                    },
                                    "description": "A git repository"
                                },
                                "sha": {
                                    "type": "string"
                                },
                                "user": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer",
                                            "format": "int64"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "issue_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "labels": {
                            "type": "array",
                            "items": {
                                "title": "Label",
                                "required": [
                                    "id",
                                    "node_id",
                                    "url",
                                    "name",
                                    "color",
                                    "default",
                                    "description"
                                ],
                                "type": "object",
                                "properties": {
                                    "color": {
                                        "type": "string",
                                        "description": "6-character hex code, without the leading #, identifying the color"
                                    },
                                    "default": {
                                        "type": "boolean"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "id": {
                                        "type": "integer"
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the label."
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the label",
                                        "format": "uri"
                                    }
                                }
                            }
                        },
                        "locked": {
                            "type": "boolean"
                        },
                        "maintainer_can_modify": {
                            "type": "boolean",
                            "description": "Indicates whether maintainers can modify the pull request."
                        },
                        "merge_commit_sha": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "mergeable": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "mergeable_state": {
                            "type": "string"
                        },
                        "merged": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "merged_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "merged_by": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        },
                        "milestone": {
                            "title": "Milestone",
                            "required": [
                                "url",
                                "html_url",
                                "labels_url",
                                "id",
                                "node_id",
                                "number",
                                "title",
                                "description",
                                "creator",
                                "open_issues",
                                "closed_issues",
                                "state",
                                "created_at",
                                "updated_at",
                                "due_on",
                                "closed_at"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "closed_at": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time"
                                },
                                "closed_issues": {
                                    "type": "integer"
                                },
                                "created_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "creator": {
                                    "title": "User",
                                    "required": [
                                        "login",
                                        "id"
                                    ],
                                    "type": [
                                        "object",
                                        "null"
                                    ],
                                    "properties": {
                                        "avatar_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "deleted": {
                                            "type": "boolean"
                                        },
                                        "email": {
                                            "type": [
                                                "string",
                                                "null"
                                            ]
                                        },
                                        "events_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "followers_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "following_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gists_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "gravatar_id": {
                                            "type": "string"
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "id": {
                                            "type": "integer"
                                        },
                                        "login": {
                                            "type": "string"
                                        },
                                        "name": {
                                            "type": "string"
                                        },
                                        "node_id": {
                                            "type": "string"
                                        },
                                        "organizations_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "received_events_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "repos_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "site_admin": {
                                            "type": "boolean"
                                        },
                                        "starred_url": {
                                            "type": "string",
                                            "format": "uri-template"
                                        },
                                        "subscriptions_url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "type": {
                                            "enum": [
                                                "Bot",
                                                "User",
                                                "Organization",
                                                "Mannequin"
                                            ],
                                            "type": "string"
                                        },
                                        "url": {
                                            "type": "string",
                                            "format": "uri"
                                        },
                                        "user_view_type": {
                                            "type": "string"
                                        }
                                    }
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "due_on": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer"
                                },
                                "labels_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "number": {
                                    "type": "integer",
                                    "description": "The number of the milestone."
                                },
                                "open_issues": {
                                    "type": "integer"
                                },
                                "state": {
                                    "enum": [
                                        "open",
                                        "closed"
                                    ],
                                    "type": "string",
                                    "description": "The state of the milestone."
                                },
                                "title": {
                                    "type": "string",
                                    "description": "The title of the milestone."
                                },
                                "updated_at": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                }
                            },
                            "description": "A collection of related issues and pull requests."
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "number": {
                            "type": "integer",
                            "description": "Number uniquely identifying the pull request within its repository."
                        },
                        "patch_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "rebaseable": {
                            "type": [
                                "boolean",
                                "null"
                            ]
                        },
                        "requested_reviewers": {
                            "type": "array",
                            "items": {
                                "oneOf": [
                                    {
                                        "title": "User",
                                        "required": [
                                            "login",
                                            "id"
                                        ],
                                        "type": [
                                            "object",
                                            "null"
                                        ],
                                        "properties": {
                                            "avatar_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "deleted": {
                                                "type": "boolean"
                                            },
                                            "email": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ]
                                            },
                                            "events_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "followers_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "following_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "gists_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "gravatar_id": {
                                                "type": "string"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer"
                                            },
                                            "login": {
                                                "type": "string"
                                            },
                                            "name": {
                                                "type": "string"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "organizations_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "received_events_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "repos_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "site_admin": {
                                                "type": "boolean"
                                            },
                                            "starred_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "subscriptions_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "type": {
                                                "enum": [
                                                    "Bot",
                                                    "User",
                                                    "Organization"
                                                ],
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "user_view_type": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    {
                                        "title": "Team",
                                        "required": [
                                            "name",
                                            "id"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "deleted": {
                                                "type": "boolean"
                                            },
                                            "description": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ],
                                                "description": "Description of the team"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer",
                                                "description": "Unique identifier of the team"
                                            },
                                            "members_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "name": {
                                                "type": "string",
                                                "description": "Name of the team"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "parent": {
                                                "required": [
                                                    "name",
                                                    "id",
                                                    "node_id",
                                                    "slug",
                                                    "description",
                                                    "privacy",
                                                    "url",
                                                    "html_url",
                                                    "members_url",
                                                    "repositories_url",
                                                    "permission"
                                                ],
                                                "type": [
                                                    "object",
                                                    "null"
                                                ],
                                                "properties": {
                                                    "description": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "Description of the team"
                                                    },
                                                    "html_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    },
                                                    "id": {
                                                        "type": "integer",
                                                        "description": "Unique identifier of the team"
                                                    },
                                                    "members_url": {
                                                        "type": "string",
                                                        "format": "uri-template"
                                                    },
                                                    "name": {
                                                        "type": "string",
                                                        "description": "Name of the team"
                                                    },
                                                    "node_id": {
                                                        "type": "string"
                                                    },
                                                    "permission": {
                                                        "type": "string",
                                                        "description": "Permission that the team will have for its repositories"
                                                    },
                                                    "privacy": {
                                                        "enum": [
                                                            "open",
                                                            "closed",
                                                            "secret"
                                                        ],
                                                        "type": "string"
                                                    },
                                                    "repositories_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    },
                                                    "slug": {
                                                        "type": "string"
                                                    },
                                                    "url": {
                                                        "type": "string",
                                                        "description": "URL for the team",
                                                        "format": "uri"
                                                    }
                                                }
                                            },
                                            "permission": {
                                                "type": "string",
                                                "description": "Permission that the team will have for its repositories"
                                            },
                                            "privacy": {
                                                "enum": [
                                                    "open",
                                                    "closed",
                                                    "secret"
                                                ],
                                                "type": "string"
                                            },
                                            "repositories_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "slug": {
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "description": "URL for the team",
                                                "format": "uri"
                                            }
                                        },
                                        "description": "Groups of organization members that gives permissions on specified repositories."
                                    }
                                ]
                            }
                        },
                        "requested_teams": {
                            "type": "array",
                            "items": {
                                "title": "Team",
                                "required": [
                                    "name",
                                    "id"
                                ],
                                "type": "object",
                                "properties": {
                                    "deleted": {
                                        "type": "boolean"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "description": "Description of the team"
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "id": {
                                        "type": "integer",
                                        "description": "Unique identifier of the team"
                                    },
                                    "members_url": {
                                        "type": "string",
                                        "format": "uri-template"
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "Name of the team"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "parent": {
                                        "required": [
                                            "name",
                                            "id",
                                            "node_id",
                                            "slug",
                                            "description",
                                            "privacy",
                                            "url",
                                            "html_url",
                                            "members_url",
                                            "repositories_url",
                                            "permission"
                                        ],
                                        "type": [
                                            "object",
                                            "null"
                                        ],
                                        "properties": {
                                            "description": {
                                                "type": [
                                                    "string",
                                                    "null"
                                                ],
                                                "description": "Description of the team"
                                            },
                                            "html_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "id": {
                                                "type": "integer",
                                                "description": "Unique identifier of the team"
                                            },
                                            "members_url": {
                                                "type": "string",
                                                "format": "uri-template"
                                            },
                                            "name": {
                                                "type": "string",
                                                "description": "Name of the team"
                                            },
                                            "node_id": {
                                                "type": "string"
                                            },
                                            "permission": {
                                                "type": "string",
                                                "description": "Permission that the team will have for its repositories"
                                            },
                                            "privacy": {
                                                "enum": [
                                                    "open",
                                                    "closed",
                                                    "secret"
                                                ],
                                                "type": "string"
                                            },
                                            "repositories_url": {
                                                "type": "string",
                                                "format": "uri"
                                            },
                                            "slug": {
                                                "type": "string"
                                            },
                                            "url": {
                                                "type": "string",
                                                "description": "URL for the team",
                                                "format": "uri"
                                            }
                                        }
                                    },
                                    "permission": {
                                        "type": "string",
                                        "description": "Permission that the team will have for its repositories"
                                    },
                                    "privacy": {
                                        "enum": [
                                            "open",
                                            "closed",
                                            "secret"
                                        ],
                                        "type": "string"
                                    },
                                    "repositories_url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "slug": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the team",
                                        "format": "uri"
                                    }
                                },
                                "description": "Groups of organization members that gives permissions on specified repositories."
                            }
                        },
                        "review_comment_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "review_comments": {
                            "type": "integer"
                        },
                        "review_comments_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "state": {
                            "enum": [
                                "open",
                                "closed"
                            ],
                            "type": "string",
                            "description": "State of this Pull Request. Either `open` or `closed`."
                        },
                        "statuses_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "title": {
                            "type": "string",
                            "description": "The title of the pull request."
                        },
                        "updated_at": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "user": {
                            "title": "User",
                            "required": [
                                "login",
                                "id"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "avatar_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "deleted": {
                                    "type": "boolean"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "events_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "followers_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "following_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gists_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "gravatar_id": {
                                    "type": "string"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer",
                                    "format": "int64"
                                },
                                "login": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "organizations_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "received_events_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "repos_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "site_admin": {
                                    "type": "boolean"
                                },
                                "starred_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "subscriptions_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "type": {
                                    "enum": [
                                        "Bot",
                                        "User",
                                        "Organization",
                                        "Mannequin"
                                    ],
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "user_view_type": {
                                    "type": "string"
                                }
                            }
                        }
                    }
                },
                "repository": {
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
                        "custom_properties": {
                            "type": "object",
                            "description": "The custom properties that were defined for the repository. The keys are the custom property names, and the values are the corresponding custom property values.",
                            "additionalProperties": true
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
                                "allow_auto_merge": {
                                    "type": "boolean"
                                },
                                "delete_branch_on_merge": {
                                    "type": "boolean"
                                },
                                "allow_update_branch": {
                                    "type": "boolean"
                                },
                                "use_squash_pr_title_as_default": {
                                    "type": "boolean"
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
                        },
                        "anonymous_access_enabled": {
                            "type": "boolean",
                            "description": "Whether anonymous git access is enabled for this repository"
                        }
                    },
                    "description": "The repository on GitHub where the event occurred. Webhook payloads contain the `repository` property\\nwhen the event occurs from activity in a repository."
                },
                "requested_team": {
                    "title": "Team",
                    "required": [
                        "name",
                        "id"
                    ],
                    "type": "object",
                    "properties": {
                        "deleted": {
                            "type": "boolean"
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "Description of the team"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the team"
                        },
                        "members_url": {
                            "type": "string",
                            "format": "uri-template"
                        },
                        "name": {
                            "type": "string",
                            "description": "Name of the team"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "parent": {
                            "required": [
                                "name",
                                "id",
                                "node_id",
                                "slug",
                                "description",
                                "privacy",
                                "url",
                                "html_url",
                                "members_url",
                                "repositories_url",
                                "permission"
                            ],
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "description": "Description of the team"
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "id": {
                                    "type": "integer",
                                    "description": "Unique identifier of the team"
                                },
                                "members_url": {
                                    "type": "string",
                                    "format": "uri-template"
                                },
                                "name": {
                                    "type": "string",
                                    "description": "Name of the team"
                                },
                                "node_id": {
                                    "type": "string"
                                },
                                "permission": {
                                    "type": "string",
                                    "description": "Permission that the team will have for its repositories"
                                },
                                "privacy": {
                                    "enum": [
                                        "open",
                                        "closed",
                                        "secret"
                                    ],
                                    "type": "string"
                                },
                                "repositories_url": {
                                    "type": "string",
                                    "format": "uri"
                                },
                                "slug": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string",
                                    "description": "URL for the team",
                                    "format": "uri"
                                }
                            }
                        },
                        "permission": {
                            "type": "string",
                            "description": "Permission that the team will have for its repositories"
                        },
                        "privacy": {
                            "enum": [
                                "open",
                                "closed",
                                "secret"
                            ],
                            "type": "string"
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "slug": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "description": "URL for the team",
                            "format": "uri"
                        }
                    },
                    "description": "Groups of organization members that gives permissions on specified repositories."
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
        }
    ]
}';
    public const SCHEMA_TITLE        = 'pull_request review_requested event';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
