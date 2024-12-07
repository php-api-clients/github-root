<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\OrgHook\Config;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrgHook implements \ApiClients\Client\GitHub\Contract\OrgHook
{
    public const SCHEMA_JSON         = '{
    "title": "Org Hook",
    "required": [
        "id",
        "url",
        "type",
        "name",
        "active",
        "events",
        "config",
        "ping_url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1"
            ]
        },
        "ping_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/pings"
            ]
        },
        "deliveries_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/octocat\\/hooks\\/1\\/deliveries"
            ]
        },
        "name": {
            "type": "string",
            "examples": [
                "web"
            ]
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "push",
                "pull_request"
            ]
        },
        "active": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "config": {
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "examples": [
                        "\\"http:\\/\\/example.com\\/2\\""
                    ]
                },
                "insecure_ssl": {
                    "type": "string",
                    "examples": [
                        "\\"0\\""
                    ]
                },
                "content_type": {
                    "type": "string",
                    "examples": [
                        "\\"form\\""
                    ]
                },
                "secret": {
                    "type": "string",
                    "examples": [
                        "\\"********\\""
                    ]
                }
            }
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-09-06T20:39:23Z"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2011-09-06T17:26:27Z"
            ]
        },
        "type": {
            "type": "string"
        }
    },
    "description": "Org Hook"
}';
    public const SCHEMA_TITLE        = 'Org Hook';
    public const SCHEMA_DESCRIPTION  = 'Org Hook';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "url": "https:\\/\\/example.com\\/",
    "ping_url": "https:\\/\\/example.com\\/",
    "deliveries_url": "https:\\/\\/example.com\\/",
    "name": "generated",
    "events": [
        "generated",
        "generated"
    ],
    "active": false,
    "config": {
        "url": "generated",
        "insecure_ssl": "generated",
        "content_type": "generated",
        "secret": "generated"
    },
    "updated_at": "1970-01-01T00:00:00+00:00",
    "created_at": "1970-01-01T00:00:00+00:00",
    "type": "generated"
}';

    public function __construct(public int $id, public string $url, #[MapFrom('ping_url')]
    public string $pingUrl, #[MapFrom('deliveries_url')]
    public string|null $deliveriesUrl, public string $name, public array $events, public bool $active, public Config $config, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('created_at')]
    public string $createdAt, public string $type,)
    {
    }
}
