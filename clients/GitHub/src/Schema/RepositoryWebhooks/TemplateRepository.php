<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryWebhooks;

final readonly class TemplateRepository implements \ApiClients\Client\GitHub\Contract\RepositoryWebhooks\TemplateRepository
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
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
    "merge_commit_title": "PR_TITLE",
    "merge_commit_message": "PR_BODY",
    "allow_merge_commit": false,
    "subscribers_count": 17,
    "network_count": 13
}';
    /**
    * squashMergeCommitTitle: The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    * squashMergeCommitMessage: The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    * mergeCommitTitle: The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    * mergeCommitMessage: The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    */
    public function __construct(public ?int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public ?string $fullName, public ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Owner $owner, public ?bool $private, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $description, public ?bool $fork, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public ?string $archiveUrl, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public ?string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public ?string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public ?string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public ?string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public ?string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public ?string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public ?string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public ?string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public ?string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public ?string $deploymentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public ?string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public ?string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public ?string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public ?string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public ?string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public ?string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public ?string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public ?string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public ?string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public ?string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public ?string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public ?string $languagesUrl, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public ?string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public ?string $milestonesUrl, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public ?string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public ?string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public ?string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('ssh_url')] public ?string $sshUrl, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public ?string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public ?string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public ?string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public ?string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public ?string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public ?string $teamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public ?string $treesUrl, #[\EventSauce\ObjectHydrator\MapFrom('clone_url')] public ?string $cloneUrl, #[\EventSauce\ObjectHydrator\MapFrom('mirror_url')] public ?string $mirrorUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public ?string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_url')] public ?string $svnUrl, public ?string $homepage, public ?string $language, #[\EventSauce\ObjectHydrator\MapFrom('forks_count')] public ?int $forksCount, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_count')] public ?int $stargazersCount, #[\EventSauce\ObjectHydrator\MapFrom('watchers_count')] public ?int $watchersCount, public ?int $size, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?string $defaultBranch, #[\EventSauce\ObjectHydrator\MapFrom('open_issues_count')] public ?int $openIssuesCount, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, public ?array $topics, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public ?bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public ?bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public ?bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('has_pages')] public ?bool $hasPages, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public ?bool $hasDownloads, public ?bool $archived, public ?bool $disabled, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('pushed_at')] public ?string $pushedAt, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository\Permissions $permissions, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('temp_clone_token')] public ?string $tempCloneToken, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_auto_merge')] public ?bool $allowAutoMerge, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_update_branch')] public ?bool $allowUpdateBranch, #[\EventSauce\ObjectHydrator\MapFrom('use_squash_pr_title_as_default')] public ?bool $useSquashPrTitleAsDefault, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_title')] public ?string $squashMergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_message')] public ?string $squashMergeCommitMessage, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_title')] public ?string $mergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_message')] public ?string $mergeCommitMessage, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_count')] public ?int $subscribersCount, #[\EventSauce\ObjectHydrator\MapFrom('network_count')] public ?int $networkCount)
    {
    }
}
