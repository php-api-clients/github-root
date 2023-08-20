<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet6A729224\Tiet8EE4DB2C\Tiet59CD7F6E;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietCCAF378E
{
    public const SCHEMA_JSON         = '{
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
        }
    },
    "description": "The [`deploy key`](https:\\/\\/docs.github.com\\/enterprise-server@3.10\\/rest\\/deploy-keys\\/deploy-keys#get-a-deploy-key) resource."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [`deploy key`](https://docs.github.com/enterprise-server@3.10/rest/deploy-keys/deploy-keys#get-a-deploy-key) resource.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "added_by": "generated",
    "created_at": "generated",
    "id": 2,
    "key": "generated",
    "last_used": "generated",
    "read_only": false,
    "title": "generated",
    "url": "https:\\/\\/example.com\\/",
    "verified": false
}';

    public function __construct(#[MapFrom('added_by')]
    public string|null $addedBy, #[MapFrom('created_at')]
    public string $createdAt, public int $id, public string $key, #[MapFrom('last_used')]
    public string|null $lastUsed, #[MapFrom('read_only')]
    public bool $readOnly, public string $title, public string $url, public bool $verified,)
    {
    }
}
