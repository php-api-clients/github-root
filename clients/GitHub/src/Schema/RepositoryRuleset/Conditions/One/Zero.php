<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Conditions\One;

final readonly class Zero implements \ApiClients\Client\GitHub\Contract\RepositoryRulesetConditions, \ApiClients\Client\GitHub\Contract\RepositoryRulesetConditionsRepositoryNameTarget
{
    const SCHEMA_JSON = '{
    "title": "repository_name_and_ref_name",
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
            "title": "Repository ruleset conditions for repository names",
            "required": [
                "repository_name"
            ],
            "type": "object",
            "properties": {
                "repository_name": {
                    "type": "object",
                    "properties": {
                        "include": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                        },
                        "exclude": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                        },
                        "protected": {
                            "type": "boolean",
                            "description": "Whether renaming of target repositories is prevented."
                        }
                    }
                }
            },
            "description": "Parameters for a repository name condition"
        }
    ],
    "description": "Conditions to target repositories by name and refs by name"
}';
    public const SCHEMA_TITLE = 'repository_name_and_ref_name';
    public const SCHEMA_DESCRIPTION = 'Conditions to target repositories by name and refs by name';
    const SCHEMA_EXAMPLE_DATA = '{
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
    "repository_name": {
        "include": [
            "generated",
            "generated"
        ],
        "exclude": [
            "generated",
            "generated"
        ],
        "protected": false
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('ref_name')] public ?\ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions\RefName $refName, #[\EventSauce\ObjectHydrator\MapFrom('repository_name')] public \ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryNameTarget\RepositoryName $repositoryName)
    {
    }
}
