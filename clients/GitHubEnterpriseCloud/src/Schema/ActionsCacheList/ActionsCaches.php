<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheList;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsCaches
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "ref": {
            "type": "string",
            "examples": [
                "refs\\/heads\\/main"
            ]
        },
        "key": {
            "type": "string",
            "examples": [
                "Linux-node-958aff96db2d75d67787d1e634ae70b659de937b"
            ]
        },
        "version": {
            "type": "string",
            "examples": [
                "73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0"
            ]
        },
        "last_accessed_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2019-01-24T22:45:36.000Z"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2019-01-24T22:45:36.000Z"
            ]
        },
        "size_in_bytes": {
            "type": "integer",
            "examples": [
                1024
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "ref": "refs\\/heads\\/main",
    "key": "Linux-node-958aff96db2d75d67787d1e634ae70b659de937b",
    "version": "73885106f58cc52a7df9ec4d4a5622a5614813162cb516c759a30af6bf56e6f0",
    "last_accessed_at": "2019-01-24T22:45:36.000Z",
    "created_at": "2019-01-24T22:45:36.000Z",
    "size_in_bytes": 1024
}';

    public function __construct(public int|null $id, public string|null $ref, public string|null $key, public string|null $version, #[MapFrom('last_accessed_at')]
    public string|null $lastAccessedAt, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('size_in_bytes')]
    public int|null $sizeInBytes,)
    {
    }
}
