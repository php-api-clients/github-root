<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\PullRequest\Head;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Repo
{
    public const SCHEMA_JSON         = '{
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
    "type": [
        "object",
        "null"
    ],
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
            "type": "string",
            "format": "uri"
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
        "forks_url": {
            "type": "string",
            "format": "uri"
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
            "type": "string",
            "format": "uri"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
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
            "type": "string",
            "format": "uri"
        },
        "merges_url": {
            "type": "string",
            "format": "uri"
        },
        "milestones_url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "notifications_url": {
            "type": "string"
        },
        "owner": {
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
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "events_url": {
                    "type": "string"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string"
                },
                "gists_url": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "node_id": {
                    "type": "string"
                },
                "login": {
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
                    "type": "string"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
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
            "type": "string",
            "format": "uri"
        },
        "statuses_url": {
            "type": "string"
        },
        "subscribers_url": {
            "type": "string",
            "format": "uri"
        },
        "subscription_url": {
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
        "trees_url": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "clone_url": {
            "type": "string"
        },
        "default_branch": {
            "type": "string"
        },
        "forks": {
            "type": "integer"
        },
        "forks_count": {
            "type": "integer"
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
        "has_projects": {
            "type": "boolean"
        },
        "has_wiki": {
            "type": "boolean"
        },
        "has_pages": {
            "type": "boolean"
        },
        "homepage": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "language": {
            "type": [
                "string",
                "null"
            ]
        },
        "master_branch": {
            "type": "string"
        },
        "archived": {
            "type": "boolean"
        },
        "disabled": {
            "type": "boolean"
        },
        "visibility": {
            "type": "string",
            "description": "The repository visibility: public, private, or internal."
        },
        "mirror_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "open_issues": {
            "type": "integer"
        },
        "open_issues_count": {
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
        "temp_clone_token": {
            "type": "string"
        },
        "allow_merge_commit": {
            "type": "boolean"
        },
        "allow_squash_merge": {
            "type": "boolean"
        },
        "allow_rebase_merge": {
            "type": "boolean"
        },
        "license": {
            "required": [
                "key",
                "name",
                "url",
                "spdx_id",
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
                "url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                },
                "spdx_id": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "node_id": {
                    "type": "string"
                }
            }
        },
        "pushed_at": {
            "type": "string",
            "format": "date-time"
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
        "svn_url": {
            "type": "string",
            "format": "uri"
        },
        "topics": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "watchers": {
            "type": "integer"
        },
        "watchers_count": {
            "type": "integer"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "allow_forking": {
            "type": "boolean"
        },
        "is_template": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "archive_url": "generated",
    "assignees_url": "generated",
    "blobs_url": "generated",
    "branches_url": "generated",
    "collaborators_url": "generated",
    "comments_url": "generated",
    "commits_url": "generated",
    "compare_url": "generated",
    "contents_url": "generated",
    "contributors_url": "https:\\/\\/example.com\\/",
    "deployments_url": "https:\\/\\/example.com\\/",
    "description": "generated",
    "downloads_url": "https:\\/\\/example.com\\/",
    "events_url": "https:\\/\\/example.com\\/",
    "fork": false,
    "forks_url": "https:\\/\\/example.com\\/",
    "full_name": "generated",
    "git_commits_url": "generated",
    "git_refs_url": "generated",
    "git_tags_url": "generated",
    "hooks_url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "node_id": "generated",
    "issue_comment_url": "generated",
    "issue_events_url": "generated",
    "issues_url": "generated",
    "keys_url": "generated",
    "labels_url": "generated",
    "languages_url": "https:\\/\\/example.com\\/",
    "merges_url": "https:\\/\\/example.com\\/",
    "milestones_url": "generated",
    "name": "generated",
    "notifications_url": "generated",
    "owner": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "node_id": "generated",
        "login": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "private": false,
    "pulls_url": "generated",
    "releases_url": "generated",
    "stargazers_url": "https:\\/\\/example.com\\/",
    "statuses_url": "generated",
    "subscribers_url": "https:\\/\\/example.com\\/",
    "subscription_url": "https:\\/\\/example.com\\/",
    "tags_url": "https:\\/\\/example.com\\/",
    "teams_url": "https:\\/\\/example.com\\/",
    "trees_url": "generated",
    "url": "https:\\/\\/example.com\\/",
    "clone_url": "generated",
    "default_branch": "generated",
    "forks": 5,
    "forks_count": 11,
    "git_url": "generated",
    "has_downloads": false,
    "has_issues": false,
    "has_projects": false,
    "has_wiki": false,
    "has_pages": false,
    "homepage": "https:\\/\\/example.com\\/",
    "language": "generated",
    "master_branch": "generated",
    "archived": false,
    "disabled": false,
    "visibility": "generated",
    "mirror_url": "https:\\/\\/example.com\\/",
    "open_issues": 11,
    "open_issues_count": 17,
    "permissions": {
        "admin": false,
        "maintain": false,
        "push": false,
        "triage": false,
        "pull": false
    },
    "temp_clone_token": "generated",
    "allow_merge_commit": false,
    "allow_squash_merge": false,
    "allow_rebase_merge": false,
    "license": {
        "key": "generated",
        "name": "generated",
        "url": "https:\\/\\/example.com\\/",
        "spdx_id": "generated",
        "node_id": "generated"
    },
    "pushed_at": "1970-01-01T00:00:00+00:00",
    "size": 4,
    "ssh_url": "generated",
    "stargazers_count": 16,
    "svn_url": "https:\\/\\/example.com\\/",
    "topics": [
        "generated",
        "generated"
    ],
    "watchers": 8,
    "watchers_count": 14,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "allow_forking": false,
    "is_template": false
}';

    /**
     * visibility: The repository visibility: public, private, or internal.
     */
    public function __construct(#[MapFrom('archive_url')]
    public string $archiveUrl, #[MapFrom('assignees_url')]
    public string $assigneesUrl, #[MapFrom('blobs_url')]
    public string $blobsUrl, #[MapFrom('branches_url')]
    public string $branchesUrl, #[MapFrom('collaborators_url')]
    public string $collaboratorsUrl, #[MapFrom('comments_url')]
    public string $commentsUrl, #[MapFrom('commits_url')]
    public string $commitsUrl, #[MapFrom('compare_url')]
    public string $compareUrl, #[MapFrom('contents_url')]
    public string $contentsUrl, #[MapFrom('contributors_url')]
    public string $contributorsUrl, #[MapFrom('deployments_url')]
    public string $deploymentsUrl, public string|null $description, #[MapFrom('downloads_url')]
    public string $downloadsUrl, #[MapFrom('events_url')]
    public string $eventsUrl, public bool $fork, #[MapFrom('forks_url')]
    public string $forksUrl, #[MapFrom('full_name')]
    public string $fullName, #[MapFrom('git_commits_url')]
    public string $gitCommitsUrl, #[MapFrom('git_refs_url')]
    public string $gitRefsUrl, #[MapFrom('git_tags_url')]
    public string $gitTagsUrl, #[MapFrom('hooks_url')]
    public string $hooksUrl, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('issue_comment_url')]
    public string $issueCommentUrl, #[MapFrom('issue_events_url')]
    public string $issueEventsUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('keys_url')]
    public string $keysUrl, #[MapFrom('labels_url')]
    public string $labelsUrl, #[MapFrom('languages_url')]
    public string $languagesUrl, #[MapFrom('merges_url')]
    public string $mergesUrl, #[MapFrom('milestones_url')]
    public string $milestonesUrl, public string $name, #[MapFrom('notifications_url')]
    public string $notificationsUrl, public Schema\PullRequest\Head\Repo\Owner $owner, public bool $private, #[MapFrom('pulls_url')]
    public string $pullsUrl, #[MapFrom('releases_url')]
    public string $releasesUrl, #[MapFrom('stargazers_url')]
    public string $stargazersUrl, #[MapFrom('statuses_url')]
    public string $statusesUrl, #[MapFrom('subscribers_url')]
    public string $subscribersUrl, #[MapFrom('subscription_url')]
    public string $subscriptionUrl, #[MapFrom('tags_url')]
    public string $tagsUrl, #[MapFrom('teams_url')]
    public string $teamsUrl, #[MapFrom('trees_url')]
    public string $treesUrl, public string $url, #[MapFrom('clone_url')]
    public string $cloneUrl, #[MapFrom('default_branch')]
    public string $defaultBranch, public int $forks, #[MapFrom('forks_count')]
    public int $forksCount, #[MapFrom('git_url')]
    public string $gitUrl, #[MapFrom('has_downloads')]
    public bool $hasDownloads, #[MapFrom('has_issues')]
    public bool $hasIssues, #[MapFrom('has_projects')]
    public bool $hasProjects, #[MapFrom('has_wiki')]
    public bool $hasWiki, #[MapFrom('has_pages')]
    public bool $hasPages, public string|null $homepage, public string|null $language, #[MapFrom('master_branch')]
    public string|null $masterBranch, public bool $archived, public bool $disabled, public string|null $visibility, #[MapFrom('mirror_url')]
    public string|null $mirrorUrl, #[MapFrom('open_issues')]
    public int $openIssues, #[MapFrom('open_issues_count')]
    public int $openIssuesCount, public Schema\PullRequest\Head\Repo\Permissions|null $permissions, #[MapFrom('temp_clone_token')]
    public string|null $tempCloneToken, #[MapFrom('allow_merge_commit')]
    public bool|null $allowMergeCommit, #[MapFrom('allow_squash_merge')]
    public bool|null $allowSquashMerge, #[MapFrom('allow_rebase_merge')]
    public bool|null $allowRebaseMerge, public Schema\PullRequest\Head\Repo\License|null $license, #[MapFrom('pushed_at')]
    public string $pushedAt, public int $size, #[MapFrom('ssh_url')]
    public string $sshUrl, #[MapFrom('stargazers_count')]
    public int $stargazersCount, #[MapFrom('svn_url')]
    public string $svnUrl, public array|null $topics, public int $watchers, #[MapFrom('watchers_count')]
    public int $watchersCount, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('allow_forking')]
    public bool|null $allowForking, #[MapFrom('is_template')]
    public bool|null $isTemplate,)
    {
    }
}
