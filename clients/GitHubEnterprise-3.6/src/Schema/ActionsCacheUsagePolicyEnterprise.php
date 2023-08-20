<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsCacheUsagePolicyEnterprise
{
    public const SCHEMA_JSON         = '{
    "title": "Actions cache usage policy for an enterprise",
    "type": "object",
    "properties": {
        "repo_cache_size_limit_in_gb": {
            "type": "integer",
            "description": "For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.",
            "examples": [
                10
            ]
        },
        "max_repo_cache_size_limit_in_gb": {
            "type": "integer",
            "description": "For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.",
            "examples": [
                15
            ]
        }
    },
    "description": "GitHub Actions cache usage policy for an enterprise."
}';
    public const SCHEMA_TITLE        = 'Actions cache usage policy for an enterprise';
    public const SCHEMA_DESCRIPTION  = 'GitHub Actions cache usage policy for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repo_cache_size_limit_in_gb": 10,
    "max_repo_cache_size_limit_in_gb": 15
}';

    /**
     * repoCacheSizeLimitInGb: For repositories in an enterprise, the default size limit for the sum of all caches in a repository, in gigabytes.
     * maxRepoCacheSizeLimitInGb: For repositories in an enterprise, the maximum value that can be set as the limit for the sum of all caches in a repository, in gigabytes.
     */
    public function __construct(#[MapFrom('repo_cache_size_limit_in_gb')]
    public int|null $repoCacheSizeLimitInGb, #[MapFrom('max_repo_cache_size_limit_in_gb')]
    public int|null $maxRepoCacheSizeLimitInGb,)
    {
    }
}
