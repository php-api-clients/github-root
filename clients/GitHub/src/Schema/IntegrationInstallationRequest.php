<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\IntegrationInstallationRequest\Account;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class IntegrationInstallationRequest implements \ApiClients\Client\GitHub\Contract\IntegrationInstallationRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Integration Installation Request",
    "required": [
        "id",
        "account",
        "requester",
        "created_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the request installation.",
            "examples": [
                42
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDExOkludGVncmF0aW9uMQ=="
            ]
        },
        "account": {
            "anyOf": [
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
                },
                {
                    "title": "Enterprise",
                    "required": [
                        "id",
                        "node_id",
                        "name",
                        "slug",
                        "html_url",
                        "created_at",
                        "updated_at",
                        "avatar_url"
                    ],
                    "type": "object",
                    "properties": {
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "A short description of the enterprise."
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/enterprises\\/octo-business"
                            ]
                        },
                        "website_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The enterprise\'s website URL.",
                            "format": "uri"
                        },
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the enterprise",
                            "examples": [
                                42
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "examples": [
                                "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "description": "The name of the enterprise.",
                            "examples": [
                                "Octo Business"
                            ]
                        },
                        "slug": {
                            "type": "string",
                            "description": "The slug url identifier for the enterprise.",
                            "examples": [
                                "octo-business"
                            ]
                        },
                        "created_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "examples": [
                                "2019-01-26T19:01:12Z"
                            ]
                        },
                        "updated_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "examples": [
                                "2019-01-26T19:14:43Z"
                            ]
                        },
                        "avatar_url": {
                            "type": "string",
                            "format": "uri"
                        }
                    },
                    "description": "An enterprise on GitHub."
                }
            ]
        },
        "requester": {
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
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2022-07-08T16:18:44-04:00"
            ]
        }
    },
    "description": "Request to install an integration on a target"
}';
    public const SCHEMA_TITLE        = 'Integration Installation Request';
    public const SCHEMA_DESCRIPTION  = 'Request to install an integration on a target';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "account": {
        "description": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "website_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "node_id": "generated",
        "name": "generated",
        "slug": "generated",
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "avatar_url": "https:\\/\\/example.com\\/"
    },
    "requester": {
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
    "created_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * id: Unique identifier of the request installation.
     * requester: A GitHub user.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string|null $nodeId, #[Account]
    public SimpleUser|Enterprise $account, public SimpleUser $requester, #[MapFrom('created_at')]
    public string $createdAt,)
    {
    }
}
