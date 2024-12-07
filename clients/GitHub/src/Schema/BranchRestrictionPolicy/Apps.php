<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;

final readonly class Apps implements \ApiClients\Client\GitHub\Contract\BranchRestrictionPolicy\Apps
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "slug": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "owner": {
            "type": "object",
            "properties": {
                "login": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "node_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "repos_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "hooks_url": {
                    "type": "string"
                },
                "issues_url": {
                    "type": "string"
                },
                "members_url": {
                    "type": "string"
                },
                "public_members_url": {
                    "type": "string"
                },
                "avatar_url": {
                    "type": "string"
                },
                "description": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": "string",
                    "examples": [
                        "\\"\\""
                    ]
                },
                "html_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""
                    ]
                },
                "followers_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""
                    ]
                },
                "following_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""
                    ]
                },
                "gists_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""
                    ]
                },
                "starred_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""
                    ]
                },
                "subscriptions_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""
                    ]
                },
                "organizations_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""
                    ]
                },
                "received_events_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""
                    ]
                },
                "type": {
                    "type": "string",
                    "examples": [
                        "\\"Organization\\""
                    ]
                },
                "site_admin": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                },
                "user_view_type": {
                    "type": "string",
                    "examples": [
                        "public"
                    ]
                }
            }
        },
        "name": {
            "type": "string"
        },
        "client_id": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "external_url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "permissions": {
            "type": "object",
            "properties": {
                "metadata": {
                    "type": "string"
                },
                "contents": {
                    "type": "string"
                },
                "issues": {
                    "type": "string"
                },
                "single_file": {
                    "type": "string"
                }
            }
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "slug": "generated",
    "node_id": "generated",
    "owner": {
        "login": "generated",
        "id": 2,
        "node_id": "generated",
        "url": "generated",
        "repos_url": "generated",
        "events_url": "generated",
        "hooks_url": "generated",
        "issues_url": "generated",
        "members_url": "generated",
        "public_members_url": "generated",
        "avatar_url": "generated",
        "description": "generated",
        "gravatar_id": "generated",
        "html_url": "generated",
        "followers_url": "generated",
        "following_url": "generated",
        "gists_url": "generated",
        "starred_url": "generated",
        "subscriptions_url": "generated",
        "organizations_url": "generated",
        "received_events_url": "generated",
        "type": "generated",
        "site_admin": false,
        "user_view_type": "generated"
    },
    "name": "generated",
    "client_id": "generated",
    "description": "generated",
    "external_url": "generated",
    "html_url": "generated",
    "created_at": "generated",
    "updated_at": "generated",
    "permissions": {
        "metadata": "generated",
        "contents": "generated",
        "issues": "generated",
        "single_file": "generated"
    },
    "events": [
        "generated",
        "generated"
    ]
}';
    public function __construct(public ?int $id, public ?string $slug, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Owner $owner, public ?string $name, #[\EventSauce\ObjectHydrator\MapFrom('client_id')] public ?string $clientId, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('external_url')] public ?string $externalUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps\Permissions $permissions, public ?array $events)
    {
    }
}
