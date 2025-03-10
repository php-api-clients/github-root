<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet97D27B6C\Tiet6F32A874\Tiet7AFFD455;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet7F33C1D0
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "organizations"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "number"
        },
        "organizations": {
            "type": "array",
            "items": {
                "title": "Organization Simple",
                "required": [
                    "login",
                    "url",
                    "id",
                    "node_id",
                    "repos_url",
                    "events_url",
                    "hooks_url",
                    "issues_url",
                    "members_url",
                    "public_members_url",
                    "avatar_url",
                    "description"
                ],
                "type": "object",
                "properties": {
                    "login": {
                        "type": "string",
                        "examples": [
                            "github"
                        ]
                    },
                    "id": {
                        "type": "integer",
                        "examples": [
                            1
                        ]
                    },
                    "node_id": {
                        "type": "string",
                        "examples": [
                            "MDEyOk9yZ2FuaXphdGlvbjE="
                        ]
                    },
                    "url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github"
                        ]
                    },
                    "repos_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/repos"
                        ]
                    },
                    "events_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/events"
                        ]
                    },
                    "hooks_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"
                        ]
                    },
                    "issues_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/issues"
                        ]
                    },
                    "members_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"
                        ]
                    },
                    "public_members_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"
                        ]
                    },
                    "avatar_url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                        ]
                    },
                    "description": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "A great organization"
                        ]
                    }
                },
                "description": "Organization Simple"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 1.1,
    "organizations": [
        {
            "login": "github",
            "id": 1,
            "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
            "url": "https:\\/\\/api.github.com\\/orgs\\/github",
            "repos_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/repos",
            "events_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/events",
            "hooks_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks",
            "issues_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/issues",
            "members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}",
            "public_members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}",
            "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
            "description": "A great organization"
        },
        {
            "login": "github",
            "id": 1,
            "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
            "url": "https:\\/\\/api.github.com\\/orgs\\/github",
            "repos_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/repos",
            "events_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/events",
            "hooks_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks",
            "issues_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/issues",
            "members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}",
            "public_members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}",
            "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
            "description": "A great organization"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int|float $totalCount, public array $organizations,)
    {
    }
}
