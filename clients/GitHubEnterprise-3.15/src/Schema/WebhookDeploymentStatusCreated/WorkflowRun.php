<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowRun
{
    public const SCHEMA_JSON         = '{
    "title": "Deployment Workflow Run",
    "required": [
        "id",
        "name",
        "node_id",
        "head_branch",
        "head_sha",
        "run_number",
        "event",
        "status",
        "conclusion",
        "workflow_id",
        "check_suite_id",
        "check_suite_node_id",
        "url",
        "html_url",
        "path",
        "pull_requests",
        "created_at",
        "updated_at",
        "actor",
        "triggering_actor",
        "run_attempt",
        "run_started_at",
        "display_title"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "actor": {
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
        "artifacts_url": {
            "type": "string"
        },
        "cancel_url": {
            "type": "string"
        },
        "check_suite_id": {
            "type": "integer"
        },
        "check_suite_node_id": {
            "type": "string"
        },
        "check_suite_url": {
            "type": "string"
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
                null,
                "startup_failure"
            ],
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "display_title": {
            "type": "string"
        },
        "event": {
            "type": "string"
        },
        "head_branch": {
            "type": "string"
        },
        "head_commit": {
            "type": [
                "null"
            ]
        },
        "head_repository": {
            "type": "object",
            "properties": {
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
                "description": {
                    "type": [
                        "null"
                    ]
                },
                "downloads_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "fork": {
                    "type": "boolean"
                },
                "forks_url": {
                    "type": "string"
                },
                "full_name": {
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
                "hooks_url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
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
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "notifications_url": {
                    "type": "string"
                },
                "owner": {
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
                        }
                    }
                },
                "private": {
                    "type": "boolean"
                },
                "pulls_url": {
                    "type": "string"
                },
                "releases_url": {
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
                "url": {
                    "type": "string"
                }
            }
        },
        "head_sha": {
            "type": "string"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "jobs_url": {
            "type": "string"
        },
        "logs_url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "previous_attempt_url": {
            "type": [
                "null"
            ]
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
            }
        },
        "referenced_workflows": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "path",
                    "sha"
                ],
                "type": "object",
                "properties": {
                    "path": {
                        "type": "string"
                    },
                    "ref": {
                        "type": "string"
                    },
                    "sha": {
                        "type": "string"
                    }
                }
            }
        },
        "repository": {
            "type": "object",
            "properties": {
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
                "description": {
                    "type": [
                        "null"
                    ]
                },
                "downloads_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "fork": {
                    "type": "boolean"
                },
                "forks_url": {
                    "type": "string"
                },
                "full_name": {
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
                "hooks_url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
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
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "notifications_url": {
                    "type": "string"
                },
                "owner": {
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
                        }
                    }
                },
                "private": {
                    "type": "boolean"
                },
                "pulls_url": {
                    "type": "string"
                },
                "releases_url": {
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
                "url": {
                    "type": "string"
                }
            }
        },
        "rerun_url": {
            "type": "string"
        },
        "run_attempt": {
            "type": "integer"
        },
        "run_number": {
            "type": "integer"
        },
        "run_started_at": {
            "type": "string",
            "format": "date-time"
        },
        "status": {
            "enum": [
                "requested",
                "in_progress",
                "completed",
                "queued",
                "waiting",
                "pending"
            ],
            "type": "string"
        },
        "triggering_actor": {
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
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "workflow_id": {
            "type": "integer"
        },
        "workflow_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Deployment Workflow Run';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actor": {
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
    "artifacts_url": "generated",
    "cancel_url": "generated",
    "check_suite_id": 14,
    "check_suite_node_id": "generated",
    "check_suite_url": "generated",
    "conclusion": "startup_failure",
    "created_at": "1970-01-01T00:00:00+00:00",
    "display_title": "generated",
    "event": "generated",
    "head_branch": "generated",
    "head_commit": "generated",
    "head_repository": {
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
        "description": "generated",
        "downloads_url": "generated",
        "events_url": "generated",
        "fork": false,
        "forks_url": "generated",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "hooks_url": "generated",
        "html_url": "generated",
        "id": 2,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "languages_url": "generated",
        "merges_url": "generated",
        "milestones_url": "generated",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
        "owner": {
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
            "url": "generated"
        },
        "private": false,
        "pulls_url": "generated",
        "releases_url": "generated",
        "stargazers_url": "generated",
        "statuses_url": "generated",
        "subscribers_url": "generated",
        "subscription_url": "generated",
        "tags_url": "generated",
        "teams_url": "generated",
        "trees_url": "generated",
        "url": "generated"
    },
    "head_sha": "generated",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "jobs_url": "generated",
    "logs_url": "generated",
    "name": "generated",
    "node_id": "generated",
    "path": "generated",
    "previous_attempt_url": "generated",
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
    "referenced_workflows": null,
    "repository": {
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
        "description": "generated",
        "downloads_url": "generated",
        "events_url": "generated",
        "fork": false,
        "forks_url": "generated",
        "full_name": "generated",
        "git_commits_url": "generated",
        "git_refs_url": "generated",
        "git_tags_url": "generated",
        "hooks_url": "generated",
        "html_url": "generated",
        "id": 2,
        "issue_comment_url": "generated",
        "issue_events_url": "generated",
        "issues_url": "generated",
        "keys_url": "generated",
        "labels_url": "generated",
        "languages_url": "generated",
        "merges_url": "generated",
        "milestones_url": "generated",
        "name": "generated",
        "node_id": "generated",
        "notifications_url": "generated",
        "owner": {
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
            "url": "generated"
        },
        "private": false,
        "pulls_url": "generated",
        "releases_url": "generated",
        "stargazers_url": "generated",
        "statuses_url": "generated",
        "subscribers_url": "generated",
        "subscription_url": "generated",
        "tags_url": "generated",
        "teams_url": "generated",
        "trees_url": "generated",
        "url": "generated"
    },
    "rerun_url": "generated",
    "run_attempt": 11,
    "run_number": 10,
    "run_started_at": "1970-01-01T00:00:00+00:00",
    "status": "pending",
    "triggering_actor": {
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
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "workflow_id": 11,
    "workflow_url": "generated"
}';

    public function __construct(public Schema\WebhookDeploymentStatusCreated\WorkflowRun\Actor|null $actor, #[MapFrom('artifacts_url')]
    public string|null $artifactsUrl, #[MapFrom('cancel_url')]
    public string|null $cancelUrl, #[MapFrom('check_suite_id')]
    public int $checkSuiteId, #[MapFrom('check_suite_node_id')]
    public string $checkSuiteNodeId, #[MapFrom('check_suite_url')]
    public string|null $checkSuiteUrl, public string|null $conclusion, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('display_title')]
    public string $displayTitle, public string $event, #[MapFrom('head_branch')]
    public string $headBranch, #[MapFrom('head_commit')]
    public string $headCommit, #[MapFrom('head_repository')]
    public Schema\WebhookDeploymentStatusCreated\WorkflowRun\HeadRepository|null $headRepository, #[MapFrom('head_sha')]
    public string $headSha, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('jobs_url')]
    public string|null $jobsUrl, #[MapFrom('logs_url')]
    public string|null $logsUrl, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public string $path, #[MapFrom('previous_attempt_url')]
    public string $previousAttemptUrl, #[MapFrom('pull_requests')]
    public array $pullRequests, #[MapFrom('referenced_workflows')]
    public array|null $referencedWorkflows, public Schema\WebhookDeploymentStatusCreated\WorkflowRun\Repository|null $repository, #[MapFrom('rerun_url')]
    public string|null $rerunUrl, #[MapFrom('run_attempt')]
    public int $runAttempt, #[MapFrom('run_number')]
    public int $runNumber, #[MapFrom('run_started_at')]
    public string $runStartedAt, public string $status, #[MapFrom('triggering_actor')]
    public Schema\WebhookDeploymentStatusCreated\WorkflowRun\TriggeringActor|null $triggeringActor, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url, #[MapFrom('workflow_id')]
    public int $workflowId, #[MapFrom('workflow_url')]
    public string|null $workflowUrl,)
    {
    }
}
