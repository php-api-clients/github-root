<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleRepository
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Repository",
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
        "url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "A unique identifier of the repository.",
            "format": "int64",
            "examples": [
                1296269
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The GraphQL identifier of the repository.",
            "examples": [
                "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the repository.",
            "examples": [
                "Hello-World"
            ]
        },
        "full_name": {
            "type": "string",
            "description": "The full, globally unique, name of the repository.",
            "examples": [
                "octocat\\/Hello-World"
            ]
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
            "description": "Whether the repository is private."
        },
        "html_url": {
            "type": "string",
            "description": "The URL to view the repository on GitHub.com.",
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
            "description": "The repository description.",
            "examples": [
                "This your first repo!"
            ]
        },
        "fork": {
            "type": "boolean",
            "description": "Whether the repository is a fork."
        },
        "url": {
            "type": "string",
            "description": "The URL to get more information about the repository from the GitHub API.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
            ]
        },
        "archive_url": {
            "type": "string",
            "description": "A template for the API URL to download the repository as an archive.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
            ]
        },
        "assignees_url": {
            "type": "string",
            "description": "A template for the API URL to list the available assignees for issues in the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
            ]
        },
        "blobs_url": {
            "type": "string",
            "description": "A template for the API URL to create or retrieve a raw Git blob in the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
            ]
        },
        "branches_url": {
            "type": "string",
            "description": "A template for the API URL to get information about branches in the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
            ]
        },
        "collaborators_url": {
            "type": "string",
            "description": "A template for the API URL to get information about collaborators of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
            ]
        },
        "comments_url": {
            "type": "string",
            "description": "A template for the API URL to get information about comments on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
            ]
        },
        "commits_url": {
            "type": "string",
            "description": "A template for the API URL to get information about commits on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
            ]
        },
        "compare_url": {
            "type": "string",
            "description": "A template for the API URL to compare two commits or refs.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
            ]
        },
        "contents_url": {
            "type": "string",
            "description": "A template for the API URL to get the contents of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
            ]
        },
        "contributors_url": {
            "type": "string",
            "description": "A template for the API URL to list the contributors to the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
            ]
        },
        "deployments_url": {
            "type": "string",
            "description": "The API URL to list the deployments of the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
            ]
        },
        "downloads_url": {
            "type": "string",
            "description": "The API URL to list the downloads on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
            ]
        },
        "events_url": {
            "type": "string",
            "description": "The API URL to list the events of the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
            ]
        },
        "forks_url": {
            "type": "string",
            "description": "The API URL to list the forks of the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
            ]
        },
        "git_commits_url": {
            "type": "string",
            "description": "A template for the API URL to get information about Git commits of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
            ]
        },
        "git_refs_url": {
            "type": "string",
            "description": "A template for the API URL to get information about Git refs of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
            ]
        },
        "git_tags_url": {
            "type": "string",
            "description": "A template for the API URL to get information about Git tags of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
            ]
        },
        "issue_comment_url": {
            "type": "string",
            "description": "A template for the API URL to get information about issue comments on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
            ]
        },
        "issue_events_url": {
            "type": "string",
            "description": "A template for the API URL to get information about issue events on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
            ]
        },
        "issues_url": {
            "type": "string",
            "description": "A template for the API URL to get information about issues on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
            ]
        },
        "keys_url": {
            "type": "string",
            "description": "A template for the API URL to get information about deploy keys on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
            ]
        },
        "labels_url": {
            "type": "string",
            "description": "A template for the API URL to get information about labels of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
            ]
        },
        "languages_url": {
            "type": "string",
            "description": "The API URL to get information about the languages of the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
            ]
        },
        "merges_url": {
            "type": "string",
            "description": "The API URL to merge branches in the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
            ]
        },
        "milestones_url": {
            "type": "string",
            "description": "A template for the API URL to get information about milestones of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
            ]
        },
        "notifications_url": {
            "type": "string",
            "description": "A template for the API URL to get information about notifications on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
            ]
        },
        "pulls_url": {
            "type": "string",
            "description": "A template for the API URL to get information about pull requests on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
            ]
        },
        "releases_url": {
            "type": "string",
            "description": "A template for the API URL to get information about releases on the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
            ]
        },
        "stargazers_url": {
            "type": "string",
            "description": "The API URL to list the stargazers on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
            ]
        },
        "statuses_url": {
            "type": "string",
            "description": "A template for the API URL to get information about statuses of a commit.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
            ]
        },
        "subscribers_url": {
            "type": "string",
            "description": "The API URL to list the subscribers on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
            ]
        },
        "subscription_url": {
            "type": "string",
            "description": "The API URL to subscribe to notifications for this repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
            ]
        },
        "tags_url": {
            "type": "string",
            "description": "The API URL to get information about tags on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
            ]
        },
        "teams_url": {
            "type": "string",
            "description": "The API URL to list the teams on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
            ]
        },
        "trees_url": {
            "type": "string",
            "description": "A template for the API URL to create or retrieve a raw Git tree of the repository.",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
            ]
        },
        "hooks_url": {
            "type": "string",
            "description": "The API URL to list the hooks on the repository.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
            ]
        }
    },
    "description": "A GitHub repository."
}';
    public const SCHEMA_TITLE        = 'Simple Repository';
    public const SCHEMA_DESCRIPTION  = 'A GitHub repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 1296269,
    "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
    "name": "Hello-World",
    "full_name": "octocat\\/Hello-World",
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
    "archive_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
    "assignees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
    "blobs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
    "branches_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
    "collaborators_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
    "comments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
    "commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
    "compare_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
    "contents_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
    "contributors_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
    "deployments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
    "downloads_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
    "events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
    "forks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
    "git_commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
    "git_refs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
    "git_tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
    "issue_comment_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
    "issue_events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
    "issues_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
    "keys_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
    "labels_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
    "languages_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
    "merges_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
    "milestones_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
    "notifications_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
    "pulls_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
    "releases_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
    "stargazers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
    "statuses_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
    "subscribers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
    "subscription_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
    "tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
    "teams_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
    "trees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
    "hooks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
}';

    /**
     * id: A unique identifier of the repository.
     * nodeId: The GraphQL identifier of the repository.
     * name: The name of the repository.
     * fullName: The full, globally unique, name of the repository.
     * owner: A GitHub user.
     * private: Whether the repository is private.
     * htmlUrl: The URL to view the repository on GitHub.com.
     * description: The repository description.
     * fork: Whether the repository is a fork.
     * url: The URL to get more information about the repository from the GitHub API.
     * archiveUrl: A template for the API URL to download the repository as an archive.
     * assigneesUrl: A template for the API URL to list the available assignees for issues in the repository.
     * blobsUrl: A template for the API URL to create or retrieve a raw Git blob in the repository.
     * branchesUrl: A template for the API URL to get information about branches in the repository.
     * collaboratorsUrl: A template for the API URL to get information about collaborators of the repository.
     * commentsUrl: A template for the API URL to get information about comments on the repository.
     * commitsUrl: A template for the API URL to get information about commits on the repository.
     * compareUrl: A template for the API URL to compare two commits or refs.
     * contentsUrl: A template for the API URL to get the contents of the repository.
     * contributorsUrl: A template for the API URL to list the contributors to the repository.
     * deploymentsUrl: The API URL to list the deployments of the repository.
     * downloadsUrl: The API URL to list the downloads on the repository.
     * eventsUrl: The API URL to list the events of the repository.
     * forksUrl: The API URL to list the forks of the repository.
     * gitCommitsUrl: A template for the API URL to get information about Git commits of the repository.
     * gitRefsUrl: A template for the API URL to get information about Git refs of the repository.
     * gitTagsUrl: A template for the API URL to get information about Git tags of the repository.
     * issueCommentUrl: A template for the API URL to get information about issue comments on the repository.
     * issueEventsUrl: A template for the API URL to get information about issue events on the repository.
     * issuesUrl: A template for the API URL to get information about issues on the repository.
     * keysUrl: A template for the API URL to get information about deploy keys on the repository.
     * labelsUrl: A template for the API URL to get information about labels of the repository.
     * languagesUrl: The API URL to get information about the languages of the repository.
     * mergesUrl: The API URL to merge branches in the repository.
     * milestonesUrl: A template for the API URL to get information about milestones of the repository.
     * notificationsUrl: A template for the API URL to get information about notifications on the repository.
     * pullsUrl: A template for the API URL to get information about pull requests on the repository.
     * releasesUrl: A template for the API URL to get information about releases on the repository.
     * stargazersUrl: The API URL to list the stargazers on the repository.
     * statusesUrl: A template for the API URL to get information about statuses of a commit.
     * subscribersUrl: The API URL to list the subscribers on the repository.
     * subscriptionUrl: The API URL to subscribe to notifications for this repository.
     * tagsUrl: The API URL to get information about tags on the repository.
     * teamsUrl: The API URL to list the teams on the repository.
     * treesUrl: A template for the API URL to create or retrieve a raw Git tree of the repository.
     * hooksUrl: The API URL to list the hooks on the repository.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, #[MapFrom('full_name')]
    public string $fullName, public Schema\SimpleUser $owner, public bool $private, #[MapFrom('html_url')]
    public string $htmlUrl, public string|null $description, public bool $fork, public string $url, #[MapFrom('archive_url')]
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
    public string $deploymentsUrl, #[MapFrom('downloads_url')]
    public string $downloadsUrl, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('forks_url')]
    public string $forksUrl, #[MapFrom('git_commits_url')]
    public string $gitCommitsUrl, #[MapFrom('git_refs_url')]
    public string $gitRefsUrl, #[MapFrom('git_tags_url')]
    public string $gitTagsUrl, #[MapFrom('issue_comment_url')]
    public string $issueCommentUrl, #[MapFrom('issue_events_url')]
    public string $issueEventsUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('keys_url')]
    public string $keysUrl, #[MapFrom('labels_url')]
    public string $labelsUrl, #[MapFrom('languages_url')]
    public string $languagesUrl, #[MapFrom('merges_url')]
    public string $mergesUrl, #[MapFrom('milestones_url')]
    public string $milestonesUrl, #[MapFrom('notifications_url')]
    public string $notificationsUrl, #[MapFrom('pulls_url')]
    public string $pullsUrl, #[MapFrom('releases_url')]
    public string $releasesUrl, #[MapFrom('stargazers_url')]
    public string $stargazersUrl, #[MapFrom('statuses_url')]
    public string $statusesUrl, #[MapFrom('subscribers_url')]
    public string $subscribersUrl, #[MapFrom('subscription_url')]
    public string $subscriptionUrl, #[MapFrom('tags_url')]
    public string $tagsUrl, #[MapFrom('teams_url')]
    public string $teamsUrl, #[MapFrom('trees_url')]
    public string $treesUrl, #[MapFrom('hooks_url')]
    public string $hooksUrl,)
    {
    }
}
