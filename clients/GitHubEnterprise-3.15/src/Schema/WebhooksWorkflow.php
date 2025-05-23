<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksWorkflow
{
    public const SCHEMA_JSON         = '{
    "title": "Workflow",
    "required": [
        "badge_url",
        "created_at",
        "html_url",
        "id",
        "name",
        "node_id",
        "path",
        "state",
        "updated_at",
        "url"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "badge_url": {
            "type": "string",
            "format": "uri"
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "path": {
            "type": "string"
        },
        "state": {
            "type": "string"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Workflow';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "badge_url": "https:\\/\\/example.com\\/",
    "created_at": "1970-01-01T00:00:00+00:00",
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "path": "generated",
    "state": "generated",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(#[MapFrom('badge_url')]
    public string $badgeUrl, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public string $path, public string $state, #[MapFrom('updated_at')]
    public string $updatedAt, public string $url,)
    {
    }
}
