<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookPullRequestReviewThreadUnresolved;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Thread
{
    public const SCHEMA_JSON         = '{
    "required": [
        "node_id",
        "comments"
    ],
    "type": "object",
    "properties": {
        "comments": {
            "type": "array",
            "items": {
                "title": "Pull Request Review Comment",
                "required": [
                    "url",
                    "pull_request_review_id",
                    "id",
                    "node_id",
                    "diff_hunk",
                    "path",
                    "position",
                    "original_position",
                    "commit_id",
                    "original_commit_id",
                    "user",
                    "body",
                    "created_at",
                    "updated_at",
                    "html_url",
                    "pull_request_url",
                    "author_association",
                    "_links",
                    "start_line",
                    "original_start_line",
                    "original_line",
                    "line",
                    "start_side",
                    "side",
                    "reactions"
                ],
                "type": "object",
                "properties": {
                    "_links": {
                        "required": [
                            "self",
                            "html",
                            "pull_request"
                        ],
                        "type": "object",
                        "properties": {
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
                            "pull_request": {
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
                        "type": "string",
                        "description": "The text of the comment."
                    },
                    "commit_id": {
                        "type": "string",
                        "description": "The SHA of the commit to which the comment applies."
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "diff_hunk": {
                        "type": "string",
                        "description": "The diff of the line that the comment refers to."
                    },
                    "html_url": {
                        "type": "string",
                        "description": "HTML URL for the pull request review comment.",
                        "format": "uri"
                    },
                    "id": {
                        "type": "integer",
                        "description": "The ID of the pull request review comment."
                    },
                    "in_reply_to_id": {
                        "type": "integer",
                        "description": "The comment ID to reply to."
                    },
                    "line": {
                        "type": [
                            "integer",
                            "null"
                        ],
                        "description": "The line of the blob to which the comment applies. The last line of the range for a multi-line comment"
                    },
                    "node_id": {
                        "type": "string",
                        "description": "The node ID of the pull request review comment."
                    },
                    "original_commit_id": {
                        "type": "string",
                        "description": "The SHA of the original commit to which the comment applies."
                    },
                    "original_line": {
                        "type": "integer",
                        "description": "The line of the blob to which the comment applies. The last line of the range for a multi-line comment"
                    },
                    "original_position": {
                        "type": "integer",
                        "description": "The index of the original line in the diff to which the comment applies."
                    },
                    "original_start_line": {
                        "type": [
                            "integer",
                            "null"
                        ],
                        "description": "The first line of the range for a multi-line comment."
                    },
                    "path": {
                        "type": "string",
                        "description": "The relative path of the file to which the comment applies."
                    },
                    "position": {
                        "type": [
                            "integer",
                            "null"
                        ],
                        "description": "The line index in the diff to which the comment applies."
                    },
                    "pull_request_review_id": {
                        "type": [
                            "integer",
                            "null"
                        ],
                        "description": "The ID of the pull request review to which the comment belongs."
                    },
                    "pull_request_url": {
                        "type": "string",
                        "description": "URL for the pull request that the review comment belongs to.",
                        "format": "uri"
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
                    "side": {
                        "enum": [
                            "LEFT",
                            "RIGHT"
                        ],
                        "type": "string",
                        "description": "The side of the first line of the range for a multi-line comment."
                    },
                    "start_line": {
                        "type": [
                            "integer",
                            "null"
                        ],
                        "description": "The first line of the range for a multi-line comment."
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
                    "subject_type": {
                        "enum": [
                            "line",
                            "file"
                        ],
                        "type": "string",
                        "description": "The level at which the comment is targeted, can be a diff line or a file."
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "url": {
                        "type": "string",
                        "description": "URL for the pull request review comment",
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
                    }
                },
                "description": "The [comment](https:\\/\\/docs.github.com\\/enterprise-server@3.12\\/rest\\/pulls\\/comments#get-a-review-comment-for-a-pull-request) itself."
            }
        },
        "node_id": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "comments": [
        {
            "_links": {
                "html": {
                    "href": "generated"
                },
                "pull_request": {
                    "href": "generated"
                },
                "self": {
                    "href": "generated"
                }
            },
            "author_association": "OWNER",
            "body": "generated",
            "commit_id": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "diff_hunk": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "in_reply_to_id": 14,
            "line": 4,
            "node_id": "generated",
            "original_commit_id": "generated",
            "original_line": 13,
            "original_position": 17,
            "original_start_line": 19,
            "path": "generated",
            "position": 8,
            "pull_request_review_id": 22,
            "pull_request_url": "https:\\/\\/example.com\\/",
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
            "side": "RIGHT",
            "start_line": 10,
            "start_side": "RIGHT",
            "subject_type": "file",
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
                "url": "https:\\/\\/example.com\\/"
            }
        },
        {
            "_links": {
                "html": {
                    "href": "generated"
                },
                "pull_request": {
                    "href": "generated"
                },
                "self": {
                    "href": "generated"
                }
            },
            "author_association": "OWNER",
            "body": "generated",
            "commit_id": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "diff_hunk": "generated",
            "html_url": "https:\\/\\/example.com\\/",
            "id": 2,
            "in_reply_to_id": 14,
            "line": 4,
            "node_id": "generated",
            "original_commit_id": "generated",
            "original_line": 13,
            "original_position": 17,
            "original_start_line": 19,
            "path": "generated",
            "position": 8,
            "pull_request_review_id": 22,
            "pull_request_url": "https:\\/\\/example.com\\/",
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
            "side": "RIGHT",
            "start_line": 10,
            "start_side": "RIGHT",
            "subject_type": "file",
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
                "url": "https:\\/\\/example.com\\/"
            }
        }
    ],
    "node_id": "generated"
}';

    public function __construct(public array $comments, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
