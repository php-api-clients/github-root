<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CheckSuite
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "node_id",
        "head_branch",
        "head_sha",
        "status",
        "conclusion",
        "url",
        "before",
        "after",
        "pull_requests",
        "app",
        "created_at",
        "updated_at",
        "latest_check_runs_count",
        "check_runs_url",
        "head_commit"
    ],
    "type": "object",
    "properties": {
        "after": {
            "type": [
                "string",
                "null"
            ]
        },
        "app": {
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
            "type": "object",
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
                            "pull_request_review_thread",
                            "merge_queue_entry",
                            "workflow_job"
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
                "client_id": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The Client ID for the GitHub app"
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
                                "write",
                                "admin"
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
        "before": {
            "type": [
                "string",
                "null"
            ]
        },
        "check_runs_url": {
            "type": "string",
            "format": "uri"
        },
        "conclusion": {
            "enum": [
                "success",
                "failure",
                "neutral",
                "cancelled",
                "timed_out",
                "action_required",
                "stale",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The summary conclusion for all check runs that are part of the check suite. This value will be `null` until the check run has completed."
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "head_branch": {
            "type": [
                "string",
                "null"
            ],
            "description": "The head branch name the changes are on."
        },
        "head_commit": {
            "title": "SimpleCommit",
            "required": [
                "id",
                "tree_id",
                "message",
                "timestamp",
                "author",
                "committer"
            ],
            "type": "object",
            "properties": {
                "author": {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                "committer": {
                    "title": "Committer",
                    "required": [
                        "email",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "date": {
                            "type": "string",
                            "format": "date-time"
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "email"
                        },
                        "name": {
                            "type": "string",
                            "description": "The git author\'s name."
                        },
                        "username": {
                            "type": "string"
                        }
                    },
                    "description": "Metaproperties for Git author\\/committer information."
                },
                "id": {
                    "type": "string"
                },
                "message": {
                    "type": "string"
                },
                "timestamp": {
                    "type": "string"
                },
                "tree_id": {
                    "type": "string"
                }
            }
        },
        "head_sha": {
            "type": "string",
            "description": "The SHA of the head commit that is being checked."
        },
        "id": {
            "type": "integer"
        },
        "latest_check_runs_count": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "pull_requests": {
            "type": "array",
            "items": {
                "title": "Check Run Pull Request",
                "required": [
                    "url",
                    "id",
                    "number",
                    "head",
                    "base"
                ],
                "type": "object",
                "properties": {
                    "base": {
                        "required": [
                            "ref",
                            "sha",
                            "repo"
                        ],
                        "type": "object",
                        "properties": {
                            "ref": {
                                "type": "string"
                            },
                            "repo": {
                                "title": "Repo Ref",
                                "required": [
                                    "id",
                                    "url",
                                    "name"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer"
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
                            "sha": {
                                "type": "string"
                            }
                        }
                    },
                    "head": {
                        "required": [
                            "ref",
                            "sha",
                            "repo"
                        ],
                        "type": "object",
                        "properties": {
                            "ref": {
                                "type": "string"
                            },
                            "repo": {
                                "title": "Repo Ref",
                                "required": [
                                    "id",
                                    "url",
                                    "name"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer"
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
                            "sha": {
                                "type": "string"
                            }
                        }
                    },
                    "id": {
                        "type": "integer"
                    },
                    "number": {
                        "type": "integer"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            },
            "description": "An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite\'s `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty."
        },
        "rerequestable": {
            "type": "boolean"
        },
        "runs_rerequestable": {
            "type": "boolean"
        },
        "status": {
            "enum": [
                "requested",
                "in_progress",
                "completed",
                "queued",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`."
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "description": "URL that points to the check suite API resource.",
            "format": "uri"
        }
    },
    "description": "The [check_suite](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/rest\\/checks\\/suites#get-a-check-suite)."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [check_suite](https://docs.github.com/enterprise-server@3.13/rest/checks/suites#get-a-check-suite).';
    public const SCHEMA_EXAMPLE_DATA = '{
    "after": "generated",
    "app": {
        "created_at": "1970-01-01T00:00:00+00:00",
        "description": "generated",
        "events": [
            "generated",
            "generated"
        ],
        "external_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "client_id": "generated",
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
    "before": "generated",
    "check_runs_url": "https:\\/\\/example.com\\/",
    "conclusion": "stale",
    "created_at": "1970-01-01T00:00:00+00:00",
    "head_branch": "generated",
    "head_commit": {
        "author": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "committer": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "id": "generated",
        "message": "generated",
        "timestamp": "generated",
        "tree_id": "generated"
    },
    "head_sha": "generated",
    "id": 2,
    "latest_check_runs_count": 23,
    "node_id": "generated",
    "pull_requests": [
        {
            "base": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "head": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "id": 2,
            "number": 6,
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "base": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "head": {
                "ref": "generated",
                "repo": {
                    "id": 2,
                    "name": "generated",
                    "url": "https:\\/\\/example.com\\/"
                },
                "sha": "generated"
            },
            "id": 2,
            "number": 6,
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "rerequestable": false,
    "runs_rerequestable": false,
    "status": "queued",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * app: GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * conclusion: The summary conclusion for all check runs that are part of the check suite. This value will be `null` until the check run has completed.
     * headBranch: The head branch name the changes are on.
     * headSha: The SHA of the head commit that is being checked.
     * pullRequests: An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite's `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty.
     * status: The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`.
     * url: URL that points to the check suite API resource.
     */
    public function __construct(public string|null $after, public Schema\WebhookCheckSuiteRerequested\CheckSuite\App $app, public string|null $before, #[MapFrom('check_runs_url')]
    public string $checkRunsUrl, public string|null $conclusion, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('head_branch')]
    public string|null $headBranch, #[MapFrom('head_commit')]
    public Schema\WebhookCheckSuiteRerequested\CheckSuite\HeadCommit $headCommit, #[MapFrom('head_sha')]
    public string $headSha, public int $id, #[MapFrom('latest_check_runs_count')]
    public int $latestCheckRunsCount, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('pull_requests')]
    public array $pullRequests, public bool|null $rerequestable, #[MapFrom('runs_rerequestable')]
    public bool|null $runsRerequestable, public string|null $status, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url,)
    {
    }
}
