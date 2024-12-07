<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookFork;

use ApiClients\Client\GitHub\Contract\WebhookFork\Forkee\Repository;
use ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License;
use ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Owner;
use ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Forkee implements Repository, \ApiClients\Client\GitHub\Contract\WebhookFork\Forkee
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
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
                    "description": "Whether to require contributors to sign off on web-based commits"
                }
            },
            "description": "A git repository"
        },
        {
            "type": "object",
            "properties": {
                "allow_forking": {
                    "type": "boolean"
                },
                "archive_url": {
                    "type": "string"
                },
                "archived": {
                    "type": "boolean"
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
                "clone_url": {
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
                "created_at": {
                    "type": "string"
                },
                "default_branch": {
                    "type": "string"
                },
                "deployments_url": {
                    "type": "string"
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "disabled": {
                    "type": "boolean"
                },
                "downloads_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "fork": {
                    "enum": [
                        true
                    ],
                    "type": "boolean"
                },
                "forks": {
                    "type": "integer"
                },
                "forks_count": {
                    "type": "integer"
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
                "git_url": {
                    "type": "string"
                },
                "has_downloads": {
                    "type": "boolean"
                },
                "has_issues": {
                    "type": "boolean"
                },
                "has_pages": {
                    "type": "boolean"
                },
                "has_projects": {
                    "type": "boolean"
                },
                "has_wiki": {
                    "type": "boolean"
                },
                "homepage": {
                    "type": [
                        "string",
                        "null"
                    ]
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
                "is_template": {
                    "type": "boolean"
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
                "language": {
                    "type": [
                        "null"
                    ]
                },
                "languages_url": {
                    "type": "string"
                },
                "license": {
                    "type": [
                        "object",
                        "null"
                    ]
                },
                "merges_url": {
                    "type": "string"
                },
                "milestones_url": {
                    "type": "string"
                },
                "mirror_url": {
                    "type": [
                        "null"
                    ]
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
                "open_issues": {
                    "type": "integer"
                },
                "open_issues_count": {
                    "type": "integer"
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
                "public": {
                    "type": "boolean"
                },
                "pulls_url": {
                    "type": "string"
                },
                "pushed_at": {
                    "type": "string"
                },
                "releases_url": {
                    "type": "string"
                },
                "size": {
                    "type": "integer"
                },
                "ssh_url": {
                    "type": "string"
                },
                "stargazers_count": {
                    "type": "integer"
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
                "svn_url": {
                    "type": "string"
                },
                "tags_url": {
                    "type": "string"
                },
                "teams_url": {
                    "type": "string"
                },
                "topics": {
                    "type": "array",
                    "items": {
                        "type": [
                            "null"
                        ]
                    }
                },
                "trees_url": {
                    "type": "string"
                },
                "updated_at": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "visibility": {
                    "type": "string"
                },
                "watchers": {
                    "type": "integer"
                },
                "watchers_count": {
                    "type": "integer"
                }
            }
        }
    ],
    "description": "The created [`repository`](https:\\/\\/docs.github.com\\/rest\\/repos\\/repos#get-a-repository) resource."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The created [`repository`](https://docs.github.com/rest/repos/repos#get-a-repository) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{
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
    "clone_url": "generated",
    "collaborators_url": "generated",
    "comments_url": "generated",
    "commits_url": "generated",
    "compare_url": "generated",
    "contents_url": "generated",
    "contributors_url": "generated",
    "created_at": "generated",
    "default_branch": "generated",
    "delete_branch_on_merge": false,
    "deployments_url": "generated",
    "description": "generated",
    "disabled": false,
    "downloads_url": "generated",
    "events_url": "generated",
    "fork": true,
    "forks": 5,
    "forks_count": 11,
    "forks_url": "generated",
    "full_name": "generated",
    "git_commits_url": "generated",
    "git_refs_url": "generated",
    "git_tags_url": "generated",
    "git_url": "generated",
    "has_downloads": false,
    "has_issues": false,
    "has_pages": false,
    "has_projects": false,
    "has_wiki": false,
    "homepage": "generated",
    "hooks_url": "generated",
    "html_url": "generated",
    "id": 2,
    "is_template": false,
    "issue_comment_url": "generated",
    "issue_events_url": "generated",
    "issues_url": "generated",
    "keys_url": "generated",
    "labels_url": "generated",
    "language": "generated",
    "languages_url": "generated",
    "license": [],
    "master_branch": "generated",
    "merges_url": "generated",
    "milestones_url": "generated",
    "mirror_url": "generated",
    "name": "generated",
    "node_id": "generated",
    "notifications_url": "generated",
    "open_issues": 11,
    "open_issues_count": 17,
    "organization": "generated",
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
    "pushed_at": "generated",
    "releases_url": "generated",
    "role_name": "generated",
    "size": 4,
    "ssh_url": "generated",
    "stargazers": 10,
    "stargazers_count": 16,
    "stargazers_url": "generated",
    "statuses_url": "generated",
    "subscribers_url": "generated",
    "subscription_url": "generated",
    "svn_url": "generated",
    "tags_url": "generated",
    "teams_url": "generated",
    "topics": [
        "generated",
        "generated"
    ],
    "trees_url": "generated",
    "updated_at": "generated",
    "url": "generated",
    "visibility": "generated",
    "watchers": 8,
    "watchers_count": 14,
    "web_commit_signoff_required": false
}';

    /**
     * allowAutoMerge: Whether to allow auto-merge for pull requests.
     * allowMergeCommit: Whether to allow merge commits for pull requests.
     * allowRebaseMerge: Whether to allow rebase merges for pull requests.
     * allowSquashMerge: Whether to allow squash merges for pull requests.
     * deleteBranchOnMerge: Whether to delete head branches when pull requests are merged
     * webCommitSignoffRequired: Whether to require contributors to sign off on web-based commits
     */
    public function __construct(#[MapFrom('allow_auto_merge')]
    public bool|null $allowAutoMerge, #[MapFrom('allow_forking')]
    public bool|null $allowForking, #[MapFrom('allow_merge_commit')]
    public bool|null $allowMergeCommit, #[MapFrom('allow_rebase_merge')]
    public bool|null $allowRebaseMerge, #[MapFrom('allow_squash_merge')]
    public bool|null $allowSquashMerge, #[MapFrom('allow_update_branch')]
    public bool|null $allowUpdateBranch, #[MapFrom('archive_url')]
    public string|null $archiveUrl, public bool|null $archived, #[MapFrom('assignees_url')]
    public string|null $assigneesUrl, #[MapFrom('blobs_url')]
    public string|null $blobsUrl, #[MapFrom('branches_url')]
    public string|null $branchesUrl, #[MapFrom('clone_url')]
    public string|null $cloneUrl, #[MapFrom('collaborators_url')]
    public string|null $collaboratorsUrl, #[MapFrom('comments_url')]
    public string|null $commentsUrl, #[MapFrom('commits_url')]
    public string|null $commitsUrl, #[MapFrom('compare_url')]
    public string|null $compareUrl, #[MapFrom('contents_url')]
    public string|null $contentsUrl, #[MapFrom('contributors_url')]
    public string|null $contributorsUrl, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('default_branch')]
    public string|null $defaultBranch, #[MapFrom('delete_branch_on_merge')]
    public bool|null $deleteBranchOnMerge, #[MapFrom('deployments_url')]
    public string|null $deploymentsUrl, public string|null $description, public bool|null $disabled, #[MapFrom('downloads_url')]
    public string|null $downloadsUrl, #[MapFrom('events_url')]
    public string|null $eventsUrl, public bool|null $fork, public int|null $forks, #[MapFrom('forks_count')]
    public int|null $forksCount, #[MapFrom('forks_url')]
    public string|null $forksUrl, #[MapFrom('full_name')]
    public string|null $fullName, #[MapFrom('git_commits_url')]
    public string|null $gitCommitsUrl, #[MapFrom('git_refs_url')]
    public string|null $gitRefsUrl, #[MapFrom('git_tags_url')]
    public string|null $gitTagsUrl, #[MapFrom('git_url')]
    public string|null $gitUrl, #[MapFrom('has_downloads')]
    public bool|null $hasDownloads, #[MapFrom('has_issues')]
    public bool|null $hasIssues, #[MapFrom('has_pages')]
    public bool|null $hasPages, #[MapFrom('has_projects')]
    public bool|null $hasProjects, #[MapFrom('has_wiki')]
    public bool|null $hasWiki, public string|null $homepage, #[MapFrom('hooks_url')]
    public string|null $hooksUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int|null $id, #[MapFrom('is_template')]
    public bool|null $isTemplate, #[MapFrom('issue_comment_url')]
    public string|null $issueCommentUrl, #[MapFrom('issue_events_url')]
    public string|null $issueEventsUrl, #[MapFrom('issues_url')]
    public string|null $issuesUrl, #[MapFrom('keys_url')]
    public string|null $keysUrl, #[MapFrom('labels_url')]
    public string|null $labelsUrl, public string $language, #[MapFrom('languages_url')]
    public string|null $languagesUrl, public License|null $license, #[MapFrom('master_branch')]
    public string|null $masterBranch, #[MapFrom('merges_url')]
    public string|null $mergesUrl, #[MapFrom('milestones_url')]
    public string|null $milestonesUrl, #[MapFrom('mirror_url')]
    public string $mirrorUrl, public string|null $name, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('notifications_url')]
    public string|null $notificationsUrl, #[MapFrom('open_issues')]
    public int|null $openIssues, #[MapFrom('open_issues_count')]
    public int|null $openIssuesCount, public string|null $organization, public Owner|null $owner, public Permissions|null $permissions, public bool|null $private, public bool|null $public, #[MapFrom('pulls_url')]
    public string|null $pullsUrl, #[MapFrom('pushed_at')]
    public string|null $pushedAt, #[MapFrom('releases_url')]
    public string|null $releasesUrl, #[MapFrom('role_name')]
    public string|null $roleName, public int|null $size, #[MapFrom('ssh_url')]
    public string|null $sshUrl, public int|null $stargazers, #[MapFrom('stargazers_count')]
    public int|null $stargazersCount, #[MapFrom('stargazers_url')]
    public string|null $stargazersUrl, #[MapFrom('statuses_url')]
    public string|null $statusesUrl, #[MapFrom('subscribers_url')]
    public string|null $subscribersUrl, #[MapFrom('subscription_url')]
    public string|null $subscriptionUrl, #[MapFrom('svn_url')]
    public string|null $svnUrl, #[MapFrom('tags_url')]
    public string|null $tagsUrl, #[MapFrom('teams_url')]
    public string|null $teamsUrl, public array|null $topics, #[MapFrom('trees_url')]
    public string|null $treesUrl, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string|null $url, public string|null $visibility, public int|null $watchers, #[MapFrom('watchers_count')]
    public int|null $watchersCount, #[MapFrom('web_commit_signoff_required')]
    public bool|null $webCommitSignoffRequired,)
    {
    }
}
