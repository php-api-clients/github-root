<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GistHistory
{
    public const SCHEMA_JSON         = '{
    "title": "Gist History",
    "type": "object",
    "properties": {
        "user": {
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
        "version": {
            "type": "string"
        },
        "committed_at": {
            "type": "string",
            "format": "date-time"
        },
        "change_status": {
            "type": "object",
            "properties": {
                "total": {
                    "type": "integer"
                },
                "additions": {
                    "type": "integer"
                },
                "deletions": {
                    "type": "integer"
                }
            }
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "Gist History"
}';
    public const SCHEMA_TITLE        = 'Gist History';
    public const SCHEMA_DESCRIPTION  = 'Gist History';
    public const SCHEMA_EXAMPLE_DATA = '{
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
    "version": "generated",
    "committed_at": "1970-01-01T00:00:00+00:00",
    "change_status": {
        "total": 5,
        "additions": 9,
        "deletions": 9
    },
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public Schema\SimpleUser|null $user, public string|null $version, #[MapFrom('committed_at')]
    public string|null $committedAt, #[MapFrom('change_status')]
    public Schema\GistHistory\ChangeStatus|null $changeStatus, public string|null $url,)
    {
    }
}
