<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Repository
{
    public const SCHEMA_JSON         = '{
    "title": "Repository Lite",
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
        "issue_comment_url",
        "issue_events_url",
        "issues_url",
        "keys_url",
        "labels_url",
        "languages_url",
        "merges_url",
        "milestones_url",
        "name",
        "node_id",
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
        "archive_url": {
            "type": "string",
            "format": "uri-template"
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
            "description": "Unique identifier of the repository"
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
        "languages_url": {
            "type": "string",
            "format": "uri"
        },
        "merges_url": {
            "type": "string",
            "format": "uri"
        },
        "milestones_url": {
            "type": "string",
            "format": "uri-template"
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
                }
            }
        },
        "private": {
            "type": "boolean",
            "description": "Whether the repository is private or public."
        },
        "pulls_url": {
            "type": "string",
            "format": "uri-template"
        },
        "releases_url": {
            "type": "string",
            "format": "uri-template"
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
        "tags_url": {
            "type": "string",
            "format": "uri"
        },
        "teams_url": {
            "type": "string",
            "format": "uri"
        },
        "trees_url": {
            "type": "string",
            "format": "uri-template"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Repository Lite';
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
    "issue_comment_url": "generated",
    "issue_events_url": "generated",
    "issues_url": "generated",
    "keys_url": "generated",
    "labels_url": "generated",
    "languages_url": "https:\\/\\/example.com\\/",
    "merges_url": "https:\\/\\/example.com\\/",
    "milestones_url": "generated",
    "name": "generated",
    "node_id": "generated",
    "notifications_url": "generated",
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
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * id: Unique identifier of the repository
     * name: The name of the repository.
     * private: Whether the repository is private or public.
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
    public string $htmlUrl, public int $id, #[MapFrom('issue_comment_url')]
    public string $issueCommentUrl, #[MapFrom('issue_events_url')]
    public string $issueEventsUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('keys_url')]
    public string $keysUrl, #[MapFrom('labels_url')]
    public string $labelsUrl, #[MapFrom('languages_url')]
    public string $languagesUrl, #[MapFrom('merges_url')]
    public string $mergesUrl, #[MapFrom('milestones_url')]
    public string $milestonesUrl, public string $name, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('notifications_url')]
    public string $notificationsUrl, public Schema\WebhookWorkflowRunInProgress\WorkflowRun\Repository\Owner|null $owner, public bool $private, #[MapFrom('pulls_url')]
    public string $pullsUrl, #[MapFrom('releases_url')]
    public string $releasesUrl, #[MapFrom('stargazers_url')]
    public string $stargazersUrl, #[MapFrom('statuses_url')]
    public string $statusesUrl, #[MapFrom('subscribers_url')]
    public string $subscribersUrl, #[MapFrom('subscription_url')]
    public string $subscriptionUrl, #[MapFrom('tags_url')]
    public string $tagsUrl, #[MapFrom('teams_url')]
    public string $teamsUrl, #[MapFrom('trees_url')]
    public string $treesUrl, public string $url,)
    {
    }
}
