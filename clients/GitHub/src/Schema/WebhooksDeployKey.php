<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksDeployKey implements \ApiClients\Client\GitHub\Contract\WebhooksDeployKey
{
    const SCHEMA_JSON = '{
    "required": [
        "id",
        "key",
        "url",
        "title",
        "verified",
        "created_at",
        "read_only"
    ],
    "type": "object",
    "properties": {
        "added_by": {
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "key": {
            "type": "string"
        },
        "last_used": {
            "type": [
                "string",
                "null"
            ]
        },
        "read_only": {
            "type": "boolean"
        },
        "title": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "verified": {
            "type": "boolean"
        },
        "enabled": {
            "type": "boolean"
        }
    },
    "description": "The [`deploy key`](https:\\/\\/docs.github.com\\/rest\\/deploy-keys\\/deploy-keys#get-a-deploy-key) resource."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [`deploy key`](https://docs.github.com/rest/deploy-keys/deploy-keys#get-a-deploy-key) resource.';
    const SCHEMA_EXAMPLE_DATA = '{
    "added_by": "generated",
    "created_at": "generated",
    "id": 2,
    "key": "generated",
    "last_used": "generated",
    "read_only": false,
    "title": "generated",
    "url": "https:\\/\\/example.com\\/",
    "verified": false,
    "enabled": false
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('added_by')] public ?string $addedBy, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public int $id, public string $key, #[\EventSauce\ObjectHydrator\MapFrom('last_used')] public ?string $lastUsed, #[\EventSauce\ObjectHydrator\MapFrom('read_only')] public bool $readOnly, public string $title, public string $url, public bool $verified, public ?bool $enabled)
    {
    }
}
