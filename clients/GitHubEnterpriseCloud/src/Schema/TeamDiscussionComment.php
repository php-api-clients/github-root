<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TeamDiscussionComment
{
    public const SCHEMA_JSON         = '{
    "title": "Team Discussion Comment",
    "required": [
        "author",
        "body",
        "body_html",
        "body_version",
        "created_at",
        "last_edited_at",
        "discussion_url",
        "html_url",
        "node_id",
        "number",
        "updated_at",
        "url"
    ],
    "type": "object",
    "properties": {
        "author": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
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
                }
            ]
        },
        "body": {
            "type": "string",
            "description": "The main text of the comment.",
            "examples": [
                "I agree with this suggestion."
            ]
        },
        "body_html": {
            "type": "string",
            "examples": [
                "<p>Do you like apples?<\\/p>"
            ]
        },
        "body_version": {
            "type": "string",
            "description": "The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.",
            "examples": [
                "0307116bbf7ced493b8d8a346c650b71"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2018-01-15T23:53:58Z"
            ]
        },
        "last_edited_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "discussion_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1"
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/orgs\\/github\\/teams\\/justice-league\\/discussions\\/1\\/comments\\/1"
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDIxOlRlYW1EaXNjdXNzaW9uQ29tbWVudDE="
            ]
        },
        "number": {
            "type": "integer",
            "description": "The unique sequence number of a team discussion comment.",
            "examples": [
                42
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2018-01-15T23:53:58Z"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1\\/comments\\/1"
            ]
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
        }
    },
    "description": "A reply to a discussion within a team."
}';
    public const SCHEMA_TITLE        = 'Team Discussion Comment';
    public const SCHEMA_DESCRIPTION  = 'A reply to a discussion within a team.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "author": {
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
    "body": "I agree with this suggestion.",
    "body_html": "<p>Do you like apples?<\\/p>",
    "body_version": "0307116bbf7ced493b8d8a346c650b71",
    "created_at": "2018-01-15T23:53:58Z",
    "last_edited_at": "1970-01-01T00:00:00+00:00",
    "discussion_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1",
    "html_url": "https:\\/\\/github.com\\/orgs\\/github\\/teams\\/justice-league\\/discussions\\/1\\/comments\\/1",
    "node_id": "MDIxOlRlYW1EaXNjdXNzaW9uQ29tbWVudDE=",
    "number": 42,
    "updated_at": "2018-01-15T23:53:58Z",
    "url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/2403582\\/discussions\\/1\\/comments\\/1",
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
    }
}';

    /**
     * body: The main text of the comment.
     * bodyVersion: The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     * number: The unique sequence number of a team discussion comment.
     */
    public function __construct(public Schema\SimpleUser|null $author, public string $body, #[MapFrom('body_html')]
    public string $bodyHtml, #[MapFrom('body_version')]
    public string $bodyVersion, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('last_edited_at')]
    public string|null $lastEditedAt, #[MapFrom('discussion_url')]
    public string $discussionUrl, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('node_id')]
    public string $nodeId, public int $number, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url, public Schema\ReactionRollup|null $reactions,)
    {
    }
}
