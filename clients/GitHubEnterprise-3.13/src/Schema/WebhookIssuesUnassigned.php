<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class WebhookIssuesUnassigned
{
    public const SCHEMA_JSON         = '{
    "title": "issues unassigned event",
    "required": [
        "action",
        "issue",
        "repository",
        "sender"
    ],
    "type": "object",
    "properties": {
        "action": {
            "enum": [
                "unassigned"
            ],
            "type": "string",
            "description": "The action that was performed."
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
            "description": "An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured\\non an enterprise account or an organization that\'s part of an enterprise account. For more information,\\nsee \\"[About enterprise accounts](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/admin\\/overview\\/about-enterprise-accounts).\\""
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
            "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
        },
        "issue": {
            "title": "Issue",
            "required": [
                "url",
                "repository_url",
                "labels_url",
                "comments_url",
                "events_url",
                "html_url",
                "id",
                "node_id",
                "number",
                "title",
                "user",
                "assignees",
                "milestone",
                "comments",
                "created_at",
                "updated_at",
                "closed_at",
                "author_association",
                "active_lock_reason",
                "body",
                "reactions"
            ],
            "type": "object",
            "properties": {
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
                "body": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "Contents of the issue"
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
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "draft": {
                    "type": "boolean"
                },
                "events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer",
                    "format": "int64"
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
                "labels_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "locked": {
                    "type": "boolean"
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
                    "type": "integer"
                },
                "performed_via_github_app": {
                    "title": "App",
                    "required": [
                        "id",
                        "node_id",
                        "owner",
                        "name",
                        "description",
                        "external_url",
                        "html_url",
                        "created_at",
                        "updated_at"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "created_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "events": {
                            "type": "array",
                            "items": {
                                "enum": [
                                    "branch_protection_rule",
                                    "check_run",
                                    "check_suite",
                                    "code_scanning_alert",
                                    "commit_comment",
                                    "content_reference",
                                    "create",
                                    "delete",
                                    "deployment",
                                    "deployment_review",
                                    "deployment_status",
                                    "deploy_key",
                                    "discussion",
                                    "discussion_comment",
                                    "fork",
                                    "gollum",
                                    "issues",
                                    "issue_comment",
                                    "label",
                                    "member",
                                    "membership",
                                    "milestone",
                                    "organization",
                                    "org_block",
                                    "page_build",
                                    "project",
                                    "project_card",
                                    "project_column",
                                    "public",
                                    "pull_request",
                                    "pull_request_review",
                                    "pull_request_review_comment",
                                    "push",
                                    "registry_package",
                                    "release",
                                    "repository",
                                    "repository_dispatch",
                                    "secret_scanning_alert",
                                    "star",
                                    "status",
                                    "team",
                                    "team_add",
                                    "watch",
                                    "workflow_dispatch",
                                    "workflow_run",
                                    "reminder",
                                    "pull_request_review_thread"
                                ],
                                "type": "string"
                            },
                            "description": "The list of events for the GitHub app"
                        },
                        "external_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "id": {
                            "type": [
                                "integer",
                                "null"
                            ],
                            "description": "Unique identifier of the GitHub app"
                        },
                        "name": {
                            "type": "string",
                            "description": "The name of the GitHub app"
                        },
                        "node_id": {
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
                            "type": "object",
                            "properties": {
                                "actions": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "administration": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "checks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "content_references": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "contents": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "deployments": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "discussions": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "emails": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "environments": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "issues": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "keys": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "members": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "metadata": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_administration": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_hooks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_packages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_plan": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_projects": {
                                    "enum": [
                                        "read",
                                        "write",
                                        "admin"
                                    ],
                                    "type": "string"
                                },
                                "organization_secrets": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_self_hosted_runners": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "organization_user_blocking": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "packages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "pages": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "pull_requests": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "repository_hooks": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "repository_projects": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "secret_scanning_alerts": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "secrets": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "security_events": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "security_scanning_alert": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "single_file": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "statuses": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "team_discussions": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "vulnerability_alerts": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                },
                                "workflows": {
                                    "enum": [
                                        "read",
                                        "write"
                                    ],
                                    "type": "string"
                                }
                            },
                            "description": "The set of permissions for the GitHub app"
                        },
                        "slug": {
                            "type": "string",
                            "description": "The slug name of the GitHub app"
                        },
                        "updated_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        }
                    },
                    "description": "GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."
                },
                "pull_request": {
                    "type": "object",
                    "properties": {
                        "diff_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "merged_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "patch_url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "reactions": {
                    "title": "Reactions",
                    "required": [
                        "url",
                        "total_count",
                        "+1",
                        "-1",
                        "laugh",
                        "confused",
                        "heart",
                        "hooray",
                        "eyes",
                        "rocket"
                    ],
                    "type": "object",
                    "properties": {
                        "+1": {
                            "type": "integer"
                        },
                        "-1": {
                            "type": "integer"
                        },
                        "confused": {
                            "type": "integer"
                        },
                        "eyes": {
                            "type": "integer"
                        },
                        "heart": {
                            "type": "integer"
                        },
                        "hooray": {
                            "type": "integer"
                        },
                        "laugh": {
                            "type": "integer"
                        },
                        "rocket": {
                            "type": "integer"
                        },
                        "total_count": {
                            "type": "integer"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "repository_url": {
                    "type": "string",
                    "format": "uri"
                },
                "sub_issues_summary": {
                    "title": "Sub-issues Summary",
                    "required": [
                        "total",
                        "completed",
                        "percent_completed"
                    ],
                    "type": "object",
                    "properties": {
                        "total": {
                            "type": "integer"
                        },
                        "completed": {
                            "type": "integer"
                        },
                        "percent_completed": {
                            "type": "integer"
                        }
                    }
                },
                "state": {
                    "enum": [
                        "open",
                        "closed"
                    ],
                    "type": "string",
                    "description": "State of the issue; either \'open\' or \'closed\'"
                },
                "state_reason": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "timeline_url": {
                    "type": "string",
                    "format": "uri"
                },
                "title": {
                    "type": "string",
                    "description": "Title of the issue"
                },
                "type": {
                    "title": "Issue Type",
                    "required": [
                        "id",
                        "node_id",
                        "name",
                        "description"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "The unique identifier of the issue type."
                        },
                        "node_id": {
                            "type": "string",
                            "description": "The node identifier of the issue type."
                        },
                        "name": {
                            "type": "string",
                            "description": "The name of the issue type."
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The description of the issue type."
                        },
                        "color": {
                            "enum": [
                                "gray",
                                "blue",
                                "green",
                                "yellow",
                                "orange",
                                "red",
                                "pink",
                                "purple",
                                null
                            ],
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The color of the issue type."
                        },
                        "created_at": {
                            "type": "string",
                            "description": "The time the issue type created.",
                            "format": "date-time"
                        },
                        "updated_at": {
                            "type": "string",
                            "description": "The time the issue type last updated.",
                            "format": "date-time"
                        },
                        "is_enabled": {
                            "type": "boolean",
                            "description": "The enabled state of the issue type."
                        }
                    },
                    "description": "The type of issue."
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "url": {
                    "type": "string",
                    "description": "URL for the issue",
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
            },
            "description": "The [issue](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/rest\\/issues\\/issues#get-an-issue) itself."
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
    public const SCHEMA_TITLE        = 'issues unassigned event';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "action": "unassigned",
    "assignee": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Mannequin",
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
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
    "issue": {
        "active_lock_reason": "spam",
        "assignee": {
            "avatar_url": "https:\\/\\/example.com\\/",
            "deleted": false,
            "email": "generated",
            "events_url": "generated",
            "followers_url": "https:\\/\\/example.com\\/",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "login": "generated",
            "name": "generated",
            "node_id": "generated",
            "organizations_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "type": "Mannequin",
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        },
        "assignees": [
            {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Mannequin",
                "url": "https:\\/\\/example.com\\/",
                "user_view_type": "generated"
            },
            {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Mannequin",
                "url": "https:\\/\\/example.com\\/",
                "user_view_type": "generated"
            }
        ],
        "author_association": "OWNER",
        "body": "generated",
        "closed_at": "1970-01-01T00:00:00+00:00",
        "comments": 8,
        "comments_url": "https:\\/\\/example.com\\/",
        "created_at": "1970-01-01T00:00:00+00:00",
        "draft": false,
        "events_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "labels": [
            {
                "color": "generated",
                "default": false,
                "description": "generated",
                "id": 2,
                "name": "generated",
                "node_id": "generated",
                "url": "https:\\/\\/example.com\\/"
            },
            {
                "color": "generated",
                "default": false,
                "description": "generated",
                "id": 2,
                "name": "generated",
                "node_id": "generated",
                "url": "https:\\/\\/example.com\\/"
            }
        ],
        "labels_url": "generated",
        "locked": false,
        "milestone": {
            "closed_at": "1970-01-01T00:00:00+00:00",
            "closed_issues": 13,
            "created_at": "1970-01-01T00:00:00+00:00",
            "creator": {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Mannequin",
                "url": "https:\\/\\/example.com\\/",
                "user_view_type": "generated"
            },
            "description": "generated",
            "due_on": "1970-01-01T00:00:00+00:00",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "labels_url": "https:\\/\\/example.com\\/",
            "node_id": "generated",
            "number": 6,
            "open_issues": 11,
            "state": "open",
            "title": "generated",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "url": "https:\\/\\/example.com\\/"
        },
        "node_id": "generated",
        "number": 6,
        "performed_via_github_app": {
            "created_at": "1970-01-01T00:00:00+00:00",
            "description": "generated",
            "events": [
                "generated",
                "generated"
            ],
            "external_url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "name": "generated",
            "node_id": "generated",
            "owner": {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Organization",
                "url": "https:\\/\\/example.com\\/",
                "user_view_type": "generated"
            },
            "permissions": {
                "actions": "read",
                "administration": "write",
                "checks": "write",
                "content_references": "write",
                "contents": "write",
                "deployments": "read",
                "discussions": "read",
                "emails": "write",
                "environments": "write",
                "issues": "write",
                "keys": "write",
                "members": "read",
                "metadata": "write",
                "organization_administration": "read",
                "organization_hooks": "write",
                "organization_packages": "read",
                "organization_plan": "read",
                "organization_projects": "read",
                "organization_secrets": "write",
                "organization_self_hosted_runners": "write",
                "organization_user_blocking": "write",
                "packages": "write",
                "pages": "read",
                "pull_requests": "read",
                "repository_hooks": "write",
                "repository_projects": "read",
                "secret_scanning_alerts": "write",
                "secrets": "read",
                "security_events": "read",
                "security_scanning_alert": "read",
                "single_file": "read",
                "statuses": "write",
                "team_discussions": "write",
                "vulnerability_alerts": "write",
                "workflows": "read"
            },
            "slug": "generated",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        "pull_request": {
            "diff_url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/",
            "merged_at": "1970-01-01T00:00:00+00:00",
            "patch_url": "https:\\/\\/example.com\\/",
            "url": "https:\\/\\/example.com\\/"
        },
        "reactions": {
            "+1": 11,
            "-1": 10,
            "confused": 8,
            "eyes": 4,
            "heart": 5,
            "hooray": 6,
            "laugh": 5,
            "rocket": 6,
            "total_count": 11,
            "url": "https:\\/\\/example.com\\/"
        },
        "repository_url": "https:\\/\\/example.com\\/",
        "sub_issues_summary": {
            "total": 5,
            "completed": 9,
            "percent_completed": 17
        },
        "state": "open",
        "state_reason": "generated",
        "timeline_url": "https:\\/\\/example.com\\/",
        "title": "generated",
        "type": {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "description": "generated",
            "color": "gray",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "is_enabled": false
        },
        "updated_at": "1970-01-01T00:00:00+00:00",
        "url": "https:\\/\\/example.com\\/",
        "user": {
            "avatar_url": "https:\\/\\/example.com\\/",
            "deleted": false,
            "email": "generated",
            "events_url": "generated",
            "followers_url": "https:\\/\\/example.com\\/",
            "following_url": "generated",
            "gists_url": "generated",
            "gravatar_id": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "login": "generated",
            "name": "generated",
            "node_id": "generated",
            "organizations_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "site_admin": false,
            "starred_url": "generated",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "type": "Mannequin",
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        }
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
            "starred_at": "\\"2020-07-09T00:17:55Z\\"",
            "user_view_type": "public"
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
        "custom_properties": [],
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
            "allow_auto_merge": false,
            "delete_branch_on_merge": false,
            "allow_update_branch": false,
            "use_squash_pr_title_as_default": false,
            "squash_merge_commit_title": "PR_TITLE",
            "squash_merge_commit_message": "PR_BODY",
            "merge_commit_title": "MERGE_MESSAGE",
            "merge_commit_message": "BLANK",
            "allow_merge_commit": false,
            "subscribers_count": 17,
            "network_count": 13
        },
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
        "subscribers_count": 17,
        "network_count": 13,
        "open_issues": 11,
        "watchers": 8,
        "master_branch": "generated",
        "starred_at": "\\"2020-07-09T00:17:42Z\\"",
        "anonymous_access_enabled": false
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
     * action: The action that was performed.
     * enterprise: An enterprise on GitHub. Webhook payloads contain the `enterprise` property when the webhook is configured
    on an enterprise account or an organization that's part of an enterprise account. For more information,
    see "[About enterprise accounts](https://docs.github.com/enterprise-server@3.13/admin/overview/about-enterprise-accounts)."
     * installation: The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured
    for and sent to a GitHub App. For more information,
    see "[Using webhooks with GitHub Apps](https://docs.github.com/enterprise-server@3.13/apps/creating-github-apps/registering-a-github-app/using-webhooks-with-github-apps)."
     * issue: The [issue](https://docs.github.com/enterprise-server@3.13/rest/issues/issues#get-an-issue) itself.
     * organization: A GitHub organization. Webhook payloads contain the `organization` property when the webhook is configured for an
    organization, or when the event occurs from activity in a repository owned by an organization.
     * repository: The repository on GitHub where the event occurred. Webhook payloads contain the `repository` property
    when the event occurs from activity in a repository.
     * sender: A GitHub user.
     */
    public function __construct(public string $action, public Schema\WebhooksUserMannequin|null $assignee, public Schema\EnterpriseWebhooks|null $enterprise, public Schema\SimpleInstallation|null $installation, public Schema\WebhooksIssue $issue, public Schema\OrganizationSimpleWebhooks|null $organization, public Schema\RepositoryWebhooks $repository, public Schema\SimpleUser $sender)
    {
    }
}
