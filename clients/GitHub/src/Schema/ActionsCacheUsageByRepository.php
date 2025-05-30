<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsCacheUsageByRepository
{
    public const SCHEMA_JSON         = '{
    "title": "Actions Cache Usage by repository",
    "required": [
        "full_name",
        "active_caches_size_in_bytes",
        "active_caches_count"
    ],
    "type": "object",
    "properties": {
        "full_name": {
            "type": "string",
            "description": "The repository owner and name for the cache usage being shown.",
            "examples": [
                "octo-org\\/Hello-World"
            ]
        },
        "active_caches_size_in_bytes": {
            "type": "integer",
            "description": "The sum of the size in bytes of all the active cache items in the repository.",
            "examples": [
                2322142
            ]
        },
        "active_caches_count": {
            "type": "integer",
            "description": "The number of active caches in the repository.",
            "examples": [
                3
            ]
        }
    },
    "description": "GitHub Actions Cache Usage by repository."
}';
    public const SCHEMA_TITLE        = 'Actions Cache Usage by repository';
    public const SCHEMA_DESCRIPTION  = 'GitHub Actions Cache Usage by repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "full_name": "octo-org\\/Hello-World",
    "active_caches_size_in_bytes": 2322142,
    "active_caches_count": 3
}';

    /**
     * fullName: The repository owner and name for the cache usage being shown.
     * activeCachesSizeInBytes: The sum of the size in bytes of all the active cache items in the repository.
     * activeCachesCount: The number of active caches in the repository.
     */
    public function __construct(#[MapFrom('full_name')]
    public string $fullName, #[MapFrom('active_caches_size_in_bytes')]
    public int $activeCachesSizeInBytes, #[MapFrom('active_caches_count')]
    public int $activeCachesCount,)
    {
    }
}
