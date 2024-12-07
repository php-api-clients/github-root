<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleUpdate;

final readonly class Parameters implements \ApiClients\Client\GitHub\Contract\RepositoryRuleUpdate\Parameters
{
    const SCHEMA_JSON = '{
    "required": [
        "update_allows_fetch_and_merge"
    ],
    "type": "object",
    "properties": {
        "update_allows_fetch_and_merge": {
            "type": "boolean",
            "description": "Branch can pull changes from its upstream repository"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "update_allows_fetch_and_merge": false
}';
    /**
     * updateAllowsFetchAndMerge: Branch can pull changes from its upstream repository
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('update_allows_fetch_and_merge')] public bool $updateAllowsFetchAndMerge)
    {
    }
}
