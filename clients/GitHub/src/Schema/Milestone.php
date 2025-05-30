<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Milestone
{
    public const SCHEMA_JSON         = '{
    "title": "Milestone",
    "required": [
        "closed_issues",
        "creator",
        "description",
        "due_on",
        "closed_at",
        "id",
        "node_id",
        "labels_url",
        "html_url",
        "number",
        "open_issues",
        "state",
        "title",
        "url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1"
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0"
            ]
        },
        "labels_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels"
            ]
        },
        "id": {
            "type": "integer",
            "examples": [
                1002604
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDk6TWlsZXN0b25lMTAwMjYwNA=="
            ]
        },
        "number": {
            "type": "integer",
            "description": "The number of the milestone.",
            "examples": [
                42
            ]
        },
        "state": {
            "enum": [
                "open",
                "closed"
            ],
            "type": "string",
            "description": "The state of the milestone.",
            "default": "open",
            "examples": [
                "open"
            ]
        },
        "title": {
            "type": "string",
            "description": "The title of the milestone.",
            "examples": [
                "v1.0"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "Tracking milestone for version 1.0"
            ]
        },
        "creator": {
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
        "open_issues": {
            "type": "integer",
            "examples": [
                4
            ]
        },
        "closed_issues": {
            "type": "integer",
            "examples": [
                8
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-04-10T20:09:31Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2014-03-03T18:58:10Z"
            ]
        },
        "closed_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2013-02-12T13:22:01Z"
            ]
        },
        "due_on": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2012-10-09T23:39:01Z"
            ]
        }
    },
    "description": "A collection of related issues and pull requests."
}';
    public const SCHEMA_TITLE        = 'Milestone';
    public const SCHEMA_DESCRIPTION  = 'A collection of related issues and pull requests.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1",
    "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0",
    "labels_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels",
    "id": 1002604,
    "node_id": "MDk6TWlsZXN0b25lMTAwMjYwNA==",
    "number": 42,
    "state": "open",
    "title": "v1.0",
    "description": "Tracking milestone for version 1.0",
    "creator": {
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
    "open_issues": 4,
    "closed_issues": 8,
    "created_at": "2011-04-10T20:09:31Z",
    "updated_at": "2014-03-03T18:58:10Z",
    "closed_at": "2013-02-12T13:22:01Z",
    "due_on": "2012-10-09T23:39:01Z"
}';

    /**
     * number: The number of the milestone.
     * state: The state of the milestone.
     * title: The title of the milestone.
     */
    public function __construct(public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('labels_url')]
    public string $labelsUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public int $number, public string $state, public string $title, public string|null $description, public Schema\SimpleUser|null $creator, #[MapFrom('open_issues')]
    public int $openIssues, #[MapFrom('closed_issues')]
    public int $closedIssues, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('closed_at')]
    public string|null $closedAt, #[MapFrom('due_on')]
    public string|null $dueOn,)
    {
    }
}
