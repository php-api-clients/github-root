<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookIssuesOpened;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "required": [
        "old_issue",
        "old_repository"
    ],
    "type": "object",
    "properties": {
        "old_issue": {
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
            "type": [
                "object",
                "null"
            ],
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
                                    "workflow_run"
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
                                        "write"
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
            },
            "description": "The [issue](https:\\/\\/docs.github.com\\/rest\\/issues\\/issues#get-an-issue) itself."
        },
        "old_repository": {
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
                "custom_properties": {
                    "type": "object",
                    "description": "The custom properties that were defined for the repository. The keys are the custom property names, and the values are the corresponding custom property values.",
                    "additionalProperties": true
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
                "has_discussions": {
                    "type": "boolean",
                    "description": "Whether the repository has discussions enabled."
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
                    "description": "Whether to require commit signoff."
                }
            },
            "description": "A git repository"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "old_issue": {
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
            "type": "Organization",
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
                "type": "Organization",
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
                "type": "Organization",
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
                "type": "Organization",
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
            "type": "Organization",
            "url": "https:\\/\\/example.com\\/",
            "user_view_type": "generated"
        }
    },
    "old_repository": {
        "allow_auto_merge": false,
        "allow_forking": false,
        "allow_merge_commit": false,
        "allow_rebase_merge": false,
        "allow_squash_merge": false,
        "allow_update_branch": false,
        "archive_url": "generated",
        "archived": false,
        "assignees_url": "generated",
        "blobs_url": "generated",
        "branches_url": "generated",
        "clone_url": "https:\\/\\/example.com\\/",
        "collaborators_url": "generated",
        "comments_url": "generated",
        "commits_url": "generated",
        "compare_url": "generated",
        "contents_url": "generated",
        "contributors_url": "https:\\/\\/example.com\\/",
        "created_at": null,
        "custom_properties": [],
        "default_branch": "generated",
        "delete_branch_on_merge": false,
        "deployments_url": "https:\\/\\/example.com\\/",
        "description": "generated",
        "disabled": false,
        "downloads_url": "https:\\/\\/example.com\\/",
        "events_url": "https:\\/\\/example.com\\/",
        "fork": false,
        "forks": 5,
        "forks_count": 11,
        "forks_url": "https:\\/\\/example.com\\/",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "git_url": "https:\\/\\/example.com\\/",
        "has_discussions": false,
        "has_downloads": false,
        "has_issues": false,
        "has_pages": false,
        "has_projects": false,
        "has_wiki": false,
        "homepage": "generated",
        "hooks_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "is_template": false,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "language": "generated",
        "languages_url": "https:\\/\\/example.com\\/",
        "license": {
            "key": "generated",
            "name": "generated",
            "node_id": "generated",
            "spdx_id": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "master_branch": "generated",
        "merges_url": "https:\\/\\/example.com\\/",
        "milestones_url": "generated",
        "mirror_url": "https:\\/\\/example.com\\/",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
        "open_issues": 11,
        "open_issues_count": 17,
        "organization": "generated",
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
            "admin": false,
            "maintain": false,
            "pull": false,
            "push": false,
            "triage": false
        },
        "private": false,
        "public": false,
        "pulls_url": "generated",
        "pushed_at": null,
        "releases_url": "generated",
        "role_name": "generated",
        "size": 4,
        "ssh_url": "generated",
        "stargazers": 10,
        "stargazers_count": 16,
        "stargazers_url": "https:\\/\\/example.com\\/",
        "statuses_url": "generated",
        "subscribers_url": "https:\\/\\/example.com\\/",
        "subscription_url": "https:\\/\\/example.com\\/",
        "svn_url": "https:\\/\\/example.com\\/",
        "tags_url": "https:\\/\\/example.com\\/",
        "teams_url": "https:\\/\\/example.com\\/",
        "topics": [
            "generated",
            "generated"
        ],
        "trees_url": "generated",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "url": "https:\\/\\/example.com\\/",
        "visibility": "internal",
        "watchers": 8,
        "watchers_count": 14,
        "web_commit_signoff_required": false
    }
}';

    /**
     * oldIssue: The [issue](https://docs.github.com/rest/issues/issues#get-an-issue) itself.
     * oldRepository: A git repository
     */
    public function __construct(#[MapFrom('old_issue')]
    public Schema\WebhookIssuesOpened\Changes\OldIssue|null $oldIssue, #[MapFrom('old_repository')]
    public Schema\WebhookIssuesOpened\Changes\OldRepository $oldRepository,)
    {
    }
}
