<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPullRequestLocked;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PullRequest
{
    public const SCHEMA_JSON         = '{
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
                            "Organization",
                            "Mannequin"
                        ],
                        "type": "string"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
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
                    "type": [
                        "string",
                        "null"
                    ]
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
                    "type": [
                        "object",
                        "null"
                    ],
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
}';
    public const SCHEMA_TITLE        = 'Pull Request';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "_links": {
        "comments": {
            "href": "generated"
        },
        "commits": {
            "href": "generated"
        },
        "html": {
            "href": "generated"
        },
        "issue": {
            "href": "generated"
        },
        "review_comment": {
            "href": "generated"
        },
        "review_comments": {
            "href": "generated"
        },
        "self": {
            "href": "generated"
        },
        "statuses": {
            "href": "generated"
        }
    },
    "active_lock_reason": "spam",
    "additions": 9,
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
            "type": "Mannequin",
            "url": "https:\\/\\/example.com\\/"
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
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "author_association": "OWNER",
    "auto_merge": {
        "commit_message": "generated",
        "commit_title": "generated",
        "enabled_by": {
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
        "merge_method": "rebase"
    },
    "base": {
        "label": "generated",
        "ref": "generated",
        "repo": {
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
            "has_downloads": false,
            "has_issues": false,
            "has_pages": false,
            "has_projects": false,
            "has_wiki": false,
            "has_discussions": false,
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
            "merge_commit_message": "BLANK",
            "merge_commit_title": "MERGE_MESSAGE",
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
            "squash_merge_commit_message": "PR_BODY",
            "squash_merge_commit_title": "PR_TITLE",
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
            "use_squash_pr_title_as_default": false,
            "visibility": "internal",
            "watchers": 8,
            "watchers_count": 14,
            "web_commit_signoff_required": false
        },
        "sha": "generated",
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
    "body": "generated",
    "changed_files": 13,
    "closed_at": "1970-01-01T00:00:00+00:00",
    "comments": 8,
    "comments_url": "https:\\/\\/example.com\\/",
    "commits": 7,
    "commits_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "deletions": 9,
    "diff_url": "https:\\/\\/example.com\\/",
    "draft": false,
    "head": {
        "label": "generated",
        "ref": "generated",
        "repo": {
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
            "has_downloads": false,
            "has_issues": false,
            "has_pages": false,
            "has_projects": false,
            "has_wiki": false,
            "has_discussions": false,
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
            "merge_commit_message": "BLANK",
            "merge_commit_title": "MERGE_MESSAGE",
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
            "squash_merge_commit_message": "PR_BODY",
            "squash_merge_commit_title": "PR_TITLE",
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
            "use_squash_pr_title_as_default": false,
            "visibility": "internal",
            "watchers": 8,
            "watchers_count": 14,
            "web_commit_signoff_required": false
        },
        "sha": "generated",
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
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "issue_url": "https:\\/\\/example.com\\/",
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
    "locked": false,
    "maintainer_can_modify": false,
    "merge_commit_sha": "generated",
    "mergeable": false,
    "mergeable_state": "generated",
    "merged": false,
    "merged_at": "1970-01-01T00:00:00+00:00",
    "merged_by": {
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
    "patch_url": "https:\\/\\/example.com\\/",
    "rebaseable": false,
    "requested_reviewers": [
        null,
        null
    ],
    "requested_teams": [
        {
            "deleted": false,
            "description": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "members_url": "generated",
            "name": "generated",
            "node_id": "generated",
            "parent": {
                "description": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "members_url": "generated",
                "name": "generated",
                "node_id": "generated",
                "permission": "generated",
                "privacy": "open",
                "repositories_url": "https:\\/\\/example.com\\/",
                "slug": "generated",
                "url": "https:\\/\\/example.com\\/"
            },
            "permission": "generated",
            "privacy": "open",
            "repositories_url": "https:\\/\\/example.com\\/",
            "slug": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "deleted": false,
            "description": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "members_url": "generated",
            "name": "generated",
            "node_id": "generated",
            "parent": {
                "description": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "members_url": "generated",
                "name": "generated",
                "node_id": "generated",
                "permission": "generated",
                "privacy": "open",
                "repositories_url": "https:\\/\\/example.com\\/",
                "slug": "generated",
                "url": "https:\\/\\/example.com\\/"
            },
            "permission": "generated",
            "privacy": "open",
            "repositories_url": "https:\\/\\/example.com\\/",
            "slug": "generated",
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "review_comment_url": "generated",
    "review_comments": 15,
    "review_comments_url": "https:\\/\\/example.com\\/",
    "state": "open",
    "statuses_url": "https:\\/\\/example.com\\/",
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
        "type": "Mannequin",
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    }
}';

    /**
     * authorAssociation: How the author is associated with the repository.
     * autoMerge: The status of auto merging a pull request.
     * draft: Indicates whether or not the pull request is a draft.
     * maintainerCanModify: Indicates whether maintainers can modify the pull request.
     * milestone: A collection of related issues and pull requests.
     * number: Number uniquely identifying the pull request within its repository.
     * state: State of this Pull Request. Either `open` or `closed`.
     * title: The title of the pull request.
     */
    public function __construct(#[MapFrom('_links')]
    public Schema\WebhookPullRequestLocked\PullRequest\Links $links, #[MapFrom('active_lock_reason')]
    public string|null $activeLockReason, public int|null $additions, public Schema\WebhookPullRequestLocked\PullRequest\Assignee|null $assignee, public array $assignees, #[MapFrom('author_association')]
    public string $authorAssociation, #[MapFrom('auto_merge')]
    public Schema\WebhookPullRequestLocked\PullRequest\AutoMerge|null $autoMerge, public Schema\WebhookPullRequestLocked\PullRequest\Base $base, public string|null $body, #[MapFrom('changed_files')]
    public int|null $changedFiles, #[MapFrom('closed_at')]
    public string|null $closedAt, public int|null $comments, #[MapFrom('comments_url')]
    public string $commentsUrl, public int|null $commits, #[MapFrom('commits_url')]
    public string $commitsUrl, #[MapFrom('created_at')]
    public string $createdAt, public int|null $deletions, #[MapFrom('diff_url')]
    public string $diffUrl, public bool $draft, public Schema\WebhookPullRequestLocked\PullRequest\Head $head, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('issue_url')]
    public string $issueUrl, public array $labels, public bool $locked, #[MapFrom('maintainer_can_modify')]
    public bool|null $maintainerCanModify, #[MapFrom('merge_commit_sha')]
    public string|null $mergeCommitSha, public bool|null $mergeable, #[MapFrom('mergeable_state')]
    public string|null $mergeableState, public bool|null $merged, #[MapFrom('merged_at')]
    public string|null $mergedAt, #[MapFrom('merged_by')]
    public Schema\WebhookPullRequestLocked\PullRequest\MergedBy|null $mergedBy, public Schema\WebhookPullRequestLocked\PullRequest\Milestone|null $milestone, #[MapFrom('node_id')]
    public string $nodeId, public int $number, #[MapFrom('patch_url')]
    public string $patchUrl, public bool|null $rebaseable, #[MapFrom('requested_reviewers')]
    public array $requestedReviewers, #[MapFrom('requested_teams')]
    public array $requestedTeams, #[MapFrom('review_comment_url')]
    public string $reviewCommentUrl, #[MapFrom('review_comments')]
    public int|null $reviewComments, #[MapFrom('review_comments_url')]
    public string $reviewCommentsUrl, public string $state, #[MapFrom('statuses_url')]
    public string $statusesUrl, public string $title, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url, public Schema\WebhookPullRequestLocked\PullRequest\User|null $user,)
    {
    }
}
