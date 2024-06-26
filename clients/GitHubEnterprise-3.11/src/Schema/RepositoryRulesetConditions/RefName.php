<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\RepositoryRulesetConditions;

final readonly class RefName
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "include": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
        },
        "exclude": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "include": [
        "generated",
        "generated"
    ],
    "exclude": [
        "generated",
        "generated"
    ]
}';

    /**
     * include: Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches.
     * exclude: Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match.
     */
    public function __construct(public array|null $include, public array|null $exclude)
    {
    }
}
