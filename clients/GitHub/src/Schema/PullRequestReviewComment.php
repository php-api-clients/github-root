<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PullRequestReviewComment
{
    public const SCHEMA_JSON         = '{
    "title": "Pull Request Review Comment",
    "required": [
        "url",
        "id",
        "node_id",
        "pull_request_review_id",
        "diff_hunk",
        "path",
        "commit_id",
        "original_commit_id",
        "user",
        "body",
        "created_at",
        "updated_at",
        "html_url",
        "pull_request_url",
        "author_association",
        "_links"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "description": "URL for the pull request review comment",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"
            ]
        },
        "pull_request_review_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the pull request review to which the comment belongs.",
            "format": "int64",
            "examples": [
                42
            ]
        },
        "id": {
            "type": "integer",
            "description": "The ID of the pull request review comment.",
            "format": "int64",
            "examples": [
                1
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The node ID of the pull request review comment.",
            "examples": [
                "MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"
            ]
        },
        "diff_hunk": {
            "type": "string",
            "description": "The diff of the line that the comment refers to.",
            "examples": [
                "@@ -16,33 +16,40 @@ public class Connection : IConnection..."
            ]
        },
        "path": {
            "type": "string",
            "description": "The relative path of the file to which the comment applies.",
            "examples": [
                "config\\/database.yaml"
            ]
        },
        "position": {
            "type": "integer",
            "description": "The line index in the diff to which the comment applies. This field is closing down; use `line` instead.",
            "examples": [
                1
            ]
        },
        "original_position": {
            "type": "integer",
            "description": "The index of the original line in the diff to which the comment applies. This field is closing down; use `original_line` instead.",
            "examples": [
                4
            ]
        },
        "commit_id": {
            "type": "string",
            "description": "The SHA of the commit to which the comment applies.",
            "examples": [
                "6dcb09b5b57875f334f61aebed695e2e4193db5e"
            ]
        },
        "original_commit_id": {
            "type": "string",
            "description": "The SHA of the original commit to which the comment applies.",
            "examples": [
                "9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"
            ]
        },
        "in_reply_to_id": {
            "type": "integer",
            "description": "The comment ID to reply to.",
            "examples": [
                8
            ]
        },
        "user": {
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
        "body": {
            "type": "string",
            "description": "The text of the comment.",
            "examples": [
                "We should probably include a check for null values here."
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-04-14T16:00:49Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-04-14T16:00:49Z"
            ]
        },
        "html_url": {
            "type": "string",
            "description": "HTML URL for the pull request review comment.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"
            ]
        },
        "pull_request_url": {
            "type": "string",
            "description": "URL for the pull request that the review comment belongs to.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"
            ]
        },
        "author_association": {
            "title": "author_association",
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
            "description": "How the author is associated with the repository.",
            "examples": [
                "OWNER"
            ]
        },
        "_links": {
            "required": [
                "self",
                "html",
                "pull_request"
            ],
            "type": "object",
            "properties": {
                "self": {
                    "required": [
                        "href"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"
                            ]
                        }
                    }
                },
                "html": {
                    "required": [
                        "href"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"
                            ]
                        }
                    }
                },
                "pull_request": {
                    "required": [
                        "href"
                    ],
                    "type": "object",
                    "properties": {
                        "href": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"
                            ]
                        }
                    }
                }
            }
        },
        "start_line": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The first line of the range for a multi-line comment.",
            "examples": [
                2
            ]
        },
        "original_start_line": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The first line of the range for a multi-line comment.",
            "examples": [
                2
            ]
        },
        "start_side": {
            "enum": [
                "LEFT",
                "RIGHT",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The side of the first line of the range for a multi-line comment.",
            "default": "RIGHT"
        },
        "line": {
            "type": "integer",
            "description": "The line of the blob to which the comment applies. The last line of the range for a multi-line comment",
            "examples": [
                2
            ]
        },
        "original_line": {
            "type": "integer",
            "description": "The line of the blob to which the comment applies. The last line of the range for a multi-line comment",
            "examples": [
                2
            ]
        },
        "side": {
            "enum": [
                "LEFT",
                "RIGHT"
            ],
            "type": "string",
            "description": "The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment",
            "default": "RIGHT"
        },
        "subject_type": {
            "enum": [
                "line",
                "file"
            ],
            "type": "string",
            "description": "The level at which the comment is targeted, can be a diff line or a file."
        },
        "reactions": {
            "title": "Reaction Rollup",
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
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "total_count": {
                    "type": "integer"
                },
                "+1": {
                    "type": "integer"
                },
                "-1": {
                    "type": "integer"
                },
                "laugh": {
                    "type": "integer"
                },
                "confused": {
                    "type": "integer"
                },
                "heart": {
                    "type": "integer"
                },
                "hooray": {
                    "type": "integer"
                },
                "eyes": {
                    "type": "integer"
                },
                "rocket": {
                    "type": "integer"
                }
            }
        },
        "body_html": {
            "type": "string",
            "examples": [
                "\\"<p>comment body<\\/p>\\""
            ]
        },
        "body_text": {
            "type": "string",
            "examples": [
                "\\"comment body\\""
            ]
        }
    },
    "description": "Pull Request Review Comments are comments on a portion of the Pull Request\'s diff."
}';
    public const SCHEMA_TITLE        = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION  = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1",
    "pull_request_review_id": 42,
    "id": 1,
    "node_id": "MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw",
    "diff_hunk": "@@ -16,33 +16,40 @@ public class Connection : IConnection...",
    "path": "config\\/database.yaml",
    "position": 1,
    "original_position": 4,
    "commit_id": "6dcb09b5b57875f334f61aebed695e2e4193db5e",
    "original_commit_id": "9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840",
    "in_reply_to_id": 8,
    "user": {
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
    "body": "We should probably include a check for null values here.",
    "created_at": "2011-04-14T16:00:49Z",
    "updated_at": "2011-04-14T16:00:49Z",
    "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1",
    "pull_request_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1",
    "author_association": "OWNER",
    "_links": {
        "self": {
            "href": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"
        },
        "html": {
            "href": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"
        },
        "pull_request": {
            "href": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"
        }
    },
    "start_line": 2,
    "original_start_line": 2,
    "start_side": "RIGHT",
    "line": 2,
    "original_line": 2,
    "side": "RIGHT",
    "subject_type": "file",
    "reactions": {
        "url": "https:\\/\\/example.com\\/",
        "total_count": 11,
        "+1": 11,
        "-1": 10,
        "laugh": 5,
        "confused": 8,
        "heart": 5,
        "hooray": 6,
        "eyes": 4,
        "rocket": 6
    },
    "body_html": "\\"<p>comment body<\\/p>\\"",
    "body_text": "\\"comment body\\""
}';

    /**
     * url: URL for the pull request review comment
     * pullRequestReviewId: The ID of the pull request review to which the comment belongs.
     * id: The ID of the pull request review comment.
     * nodeId: The node ID of the pull request review comment.
     * diffHunk: The diff of the line that the comment refers to.
     * path: The relative path of the file to which the comment applies.
     * position: The line index in the diff to which the comment applies. This field is closing down; use `line` instead.
     * originalPosition: The index of the original line in the diff to which the comment applies. This field is closing down; use `original_line` instead.
     * commitId: The SHA of the commit to which the comment applies.
     * originalCommitId: The SHA of the original commit to which the comment applies.
     * inReplyToId: The comment ID to reply to.
     * user: A GitHub user.
     * body: The text of the comment.
     * htmlUrl: HTML URL for the pull request review comment.
     * pullRequestUrl: URL for the pull request that the review comment belongs to.
     * authorAssociation: How the author is associated with the repository.
     * startLine: The first line of the range for a multi-line comment.
     * originalStartLine: The first line of the range for a multi-line comment.
     * startSide: The side of the first line of the range for a multi-line comment.
     * line: The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     * originalLine: The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     * side: The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     * subjectType: The level at which the comment is targeted, can be a diff line or a file.
     */
    public function __construct(public string $url, #[MapFrom('pull_request_review_id')]
    public int|null $pullRequestReviewId, public int $id, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('diff_hunk')]
    public string $diffHunk, public string $path, public int|null $position, #[MapFrom('original_position')]
    public int|null $originalPosition, #[MapFrom('commit_id')]
    public string $commitId, #[MapFrom('original_commit_id')]
    public string $originalCommitId, #[MapFrom('in_reply_to_id')]
    public int|null $inReplyToId, public Schema\SimpleUser $user, public string $body, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('pull_request_url')]
    public string $pullRequestUrl, #[MapFrom('author_association')]
    public string $authorAssociation, #[MapFrom('_links')]
    public Schema\PullRequestReviewComment\Links $links, #[MapFrom('start_line')]
    public int|null $startLine, #[MapFrom('original_start_line')]
    public int|null $originalStartLine, #[MapFrom('start_side')]
    public string|null $startSide, public int|null $line, #[MapFrom('original_line')]
    public int|null $originalLine, public string|null $side, #[MapFrom('subject_type')]
    public string|null $subjectType, public Schema\ReactionRollup|null $reactions, #[MapFrom('body_html')]
    public string|null $bodyHtml, #[MapFrom('body_text')]
    public string|null $bodyText,)
    {
    }
}
