<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet789E2F6A\Tiet7FD1DA54\TietDAD16BC4;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet25B29EDD
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "repository_id",
        "emoji",
        "name",
        "description",
        "created_at",
        "updated_at",
        "slug",
        "is_answerable"
    ],
    "type": "object",
    "properties": {
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "description": {
            "type": "string"
        },
        "emoji": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "is_answerable": {
            "type": "boolean"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "repository_id": {
            "type": "integer"
        },
        "slug": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "created_at": "1970-01-01T00:00:00+00:00",
    "description": "generated",
    "emoji": "generated",
    "id": 2,
    "is_answerable": false,
    "name": "generated",
    "node_id": "generated",
    "repository_id": 13,
    "slug": "generated",
    "updated_at": "generated"
}';

    public function __construct(#[MapFrom('created_at')]
    public string $createdAt, public string $description, public string $emoji, public int $id, #[MapFrom('is_answerable')]
    public bool $isAnswerable, public string $name, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('repository_id')]
    public int $repositoryId, public string $slug, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
