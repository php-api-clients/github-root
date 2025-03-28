<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Project
{
    public const SCHEMA_JSON         = '{
    "title": "Project",
    "required": [
        "id",
        "node_id",
        "number",
        "name",
        "body",
        "state",
        "url",
        "html_url",
        "owner_url",
        "creator",
        "columns_url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "owner_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/projects\\/1002604"
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/api-playground\\/projects-test\\/projects\\/12"
            ]
        },
        "columns_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/projects\\/1002604\\/columns"
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
                "MDc6UHJvamVjdDEwMDI2MDQ="
            ]
        },
        "name": {
            "type": "string",
            "description": "Name of the project",
            "examples": [
                "Week One Sprint"
            ]
        },
        "body": {
            "type": [
                "string",
                "null"
            ],
            "description": "Body of the project",
            "examples": [
                "This project represents the sprint of the first week in January"
            ]
        },
        "number": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "state": {
            "type": "string",
            "description": "State of the project; either \'open\' or \'closed\'",
            "examples": [
                "open"
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
        "organization_permission": {
            "enum": [
                "read",
                "write",
                "admin",
                "none"
            ],
            "type": "string",
            "description": "The baseline permission that all organization members have on this project. Only present if owner is an organization."
        },
        "private": {
            "type": "boolean",
            "description": "Whether or not this project can be seen by everyone. Only present if owner is an organization."
        }
    },
    "description": "Projects are a way to organize columns and cards of work."
}';
    public const SCHEMA_TITLE        = 'Project';
    public const SCHEMA_DESCRIPTION  = 'Projects are a way to organize columns and cards of work.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "owner_url": "https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test",
    "url": "https:\\/\\/api.github.com\\/projects\\/1002604",
    "html_url": "https:\\/\\/github.com\\/api-playground\\/projects-test\\/projects\\/12",
    "columns_url": "https:\\/\\/api.github.com\\/projects\\/1002604\\/columns",
    "id": 1002604,
    "node_id": "MDc6UHJvamVjdDEwMDI2MDQ=",
    "name": "Week One Sprint",
    "body": "This project represents the sprint of the first week in January",
    "number": 1,
    "state": "open",
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
    "created_at": "2011-04-10T20:09:31Z",
    "updated_at": "2014-03-03T18:58:10Z",
    "organization_permission": "read",
    "private": false
}';

    /**
     * name: Name of the project
     * body: Body of the project
     * state: State of the project; either 'open' or 'closed'
     * organizationPermission: The baseline permission that all organization members have on this project. Only present if owner is an organization.
     * private: Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    public function __construct(#[MapFrom('owner_url')]
    public string $ownerUrl, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('columns_url')]
    public string $columnsUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, public string|null $body, public int $number, public string $state, public Schema\SimpleUser|null $creator, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('organization_permission')]
    public string|null $organizationPermission, public bool|null $private,)
    {
    }
}
