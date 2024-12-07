<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Conditions\One;

use ApiClients\Client\GitHub\Contract\RepositoryRulesetConditions;
use ApiClients\Client\GitHub\Contract\RepositoryRulesetConditionsRepositoryIdTarget;
use ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions\RefName;
use ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryIdTarget\RepositoryId;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class One implements RepositoryRulesetConditions, RepositoryRulesetConditionsRepositoryIdTarget
{
    public const SCHEMA_JSON         = '{
    "title": "repository_id_and_ref_name",
    "type": "object",
    "allOf": [
        {
            "title": "Repository ruleset conditions for ref names",
            "type": "object",
            "properties": {
                "ref_name": {
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
                }
            },
            "description": "Parameters for a repository ruleset ref name condition"
        },
        {
            "title": "Repository ruleset conditions for repository IDs",
            "required": [
                "repository_id"
            ],
            "type": "object",
            "properties": {
                "repository_id": {
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
                }
            },
            "description": "Parameters for a repository ID condition"
        }
    ],
    "description": "Conditions to target repositories by id and refs by name"
}';
    public const SCHEMA_TITLE        = 'repository_id_and_ref_name';
    public const SCHEMA_DESCRIPTION  = 'Conditions to target repositories by id and refs by name';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref_name": {
        "include": [
            "generated",
            "generated"
        ],
        "exclude": [
            "generated",
            "generated"
        ]
    },
    "repository_id": {
        "repository_ids": [
            15,
            16
        ]
    }
}';

    public function __construct(#[MapFrom('ref_name')]
    public RefName|null $refName, #[MapFrom('repository_id')]
    public RepositoryId $repositoryId,)
    {
    }
}
