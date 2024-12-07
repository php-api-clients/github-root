<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class EnvironmentApprovals implements \ApiClients\Client\GitHub\Contract\EnvironmentApprovals
{
    public const SCHEMA_JSON         = '{
    "title": "Environment Approval",
    "required": [
        "environments",
        "state",
        "user",
        "comment"
    ],
    "type": "object",
    "properties": {
        "environments": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The id of the environment.",
                        "examples": [
                            56780428
                        ]
                    },
                    "node_id": {
                        "type": "string",
                        "examples": [
                            "MDExOkVudmlyb25tZW50NTY3ODA0Mjg="
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the environment.",
                        "examples": [
                            "staging"
                        ]
                    },
                    "url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"
                        ]
                    },
                    "html_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"
                        ]
                    },
                    "created_at": {
                        "type": "string",
                        "description": "The time that the environment was created, in ISO 8601 format.",
                        "format": "date-time",
                        "examples": [
                            "2020-11-23T22:00:40Z"
                        ]
                    },
                    "updated_at": {
                        "type": "string",
                        "description": "The time that the environment was last updated, in ISO 8601 format.",
                        "format": "date-time",
                        "examples": [
                            "2020-11-23T22:00:40Z"
                        ]
                    }
                }
            },
            "description": "The list of environments that were approved or rejected"
        },
        "state": {
            "enum": [
                "approved",
                "rejected",
                "pending"
            ],
            "type": "string",
            "description": "Whether deployment to the environment(s) was approved or rejected or pending (with comments)",
            "examples": [
                "approved"
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
        "comment": {
            "type": "string",
            "description": "The comment submitted with the deployment review",
            "examples": [
                "Ship it!"
            ]
        }
    },
    "description": "An entry in the reviews log for environment deployments"
}';
    public const SCHEMA_TITLE        = 'Environment Approval';
    public const SCHEMA_DESCRIPTION  = 'An entry in the reviews log for environment deployments';
    public const SCHEMA_EXAMPLE_DATA = '{
    "environments": [
        {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "url": "generated",
            "html_url": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "id": 2,
            "node_id": "generated",
            "name": "generated",
            "url": "generated",
            "html_url": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ],
    "state": "approved",
    "user": {
        "name": "generated",
        "email": "generated",
        "login": "generated",
        "id": 2,
        "node_id": "generated",
        "avatar_url": "https:\\/\\/example.com\\/",
        "gravatar_id": "generated",
        "url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "organizations_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "events_url": "generated",
        "received_events_url": "https:\\/\\/example.com\\/",
        "type": "generated",
        "site_admin": false,
        "starred_at": "generated",
        "user_view_type": "generated"
    },
    "comment": "generated"
}';

    /**
     * environments: The list of environments that were approved or rejected
     * state: Whether deployment to the environment(s) was approved or rejected or pending (with comments)
     * user: A GitHub user.
     * comment: The comment submitted with the deployment review
     */
    public function __construct(public array $environments, public string $state, public SimpleUser $user, public string $comment)
    {
    }
}
