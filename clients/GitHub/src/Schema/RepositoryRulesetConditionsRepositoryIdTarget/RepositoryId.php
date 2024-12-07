<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryIdTarget;

final readonly class RepositoryId implements \ApiClients\Client\GitHub\Contract\RepositoryRulesetConditionsRepositoryIdTarget\RepositoryId
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "repository_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "repository_ids": [
        15,
        16
    ]
}';
    /**
     * repositoryIds: The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('repository_ids')] public ?array $repositoryIds)
    {
    }
}
