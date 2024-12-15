<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GlobalHook
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "type": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "active": {
            "type": "boolean"
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "config": {
            "type": "object",
            "properties": {
                "url": {
                    "type": "string"
                },
                "content_type": {
                    "type": "string"
                },
                "insecure_ssl": {
                    "type": "string"
                },
                "secret": {
                    "type": "string"
                }
            }
        },
        "updated_at": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "ping_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "id": 2,
    "name": "generated",
    "active": false,
    "events": [
        "generated",
        "generated"
    ],
    "config": {
        "url": "generated",
        "content_type": "generated",
        "insecure_ssl": "generated",
        "secret": "generated"
    },
    "updated_at": "generated",
    "created_at": "generated",
    "url": "generated",
    "ping_url": "generated"
}';

    public function __construct(public string|null $type, public int|null $id, public string|null $name, public bool|null $active, public array|null $events, public Schema\GlobalHook\Config|null $config, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('created_at')]
    public string|null $createdAt, public string|null $url, #[MapFrom('ping_url')]
    public string|null $pingUrl,)
    {
    }
}
