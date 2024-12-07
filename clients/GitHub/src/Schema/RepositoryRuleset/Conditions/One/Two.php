<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Conditions\One;

use ApiClients\Client\GitHub\Contract\RepositoryRulesetConditions;
use ApiClients\Client\GitHub\Contract\RepositoryRulesetConditionsRepositoryPropertyTarget;
use ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions\RefName;
use ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryPropertyTarget\RepositoryProperty;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Two implements RepositoryRulesetConditions, RepositoryRulesetConditionsRepositoryPropertyTarget
{
    public const SCHEMA_JSON         = '{
    "title": "repository_property_and_ref_name",
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
            "title": "Repository ruleset conditions for repository properties",
            "required": [
                "repository_property"
            ],
            "type": "object",
            "properties": {
                "repository_property": {
                    "type": "object",
                    "properties": {
                        "include": {
                            "type": "array",
                            "items": {
                                "title": "Repository ruleset property targeting definition",
                                "required": [
                                    "name",
                                    "property_values"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the repository property to target"
                                    },
                                    "property_values": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The values to match for the repository property"
                                    },
                                    "source": {
                                        "enum": [
                                            "custom",
                                            "system"
                                        ],
                                        "type": "string",
                                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                    }
                                },
                                "description": "Parameters for a targeting a repository property"
                            },
                            "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
                        },
                        "exclude": {
                            "type": "array",
                            "items": {
                                "title": "Repository ruleset property targeting definition",
                                "required": [
                                    "name",
                                    "property_values"
                                ],
                                "type": "object",
                                "properties": {
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the repository property to target"
                                    },
                                    "property_values": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The values to match for the repository property"
                                    },
                                    "source": {
                                        "enum": [
                                            "custom",
                                            "system"
                                        ],
                                        "type": "string",
                                        "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                    }
                                },
                                "description": "Parameters for a targeting a repository property"
                            },
                            "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                        }
                    }
                }
            },
            "description": "Parameters for a repository property condition"
        }
    ],
    "description": "Conditions to target repositories by property and refs by name"
}';
    public const SCHEMA_TITLE        = 'repository_property_and_ref_name';
    public const SCHEMA_DESCRIPTION  = 'Conditions to target repositories by property and refs by name';
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
    "repository_property": {
        "include": [
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ],
                "source": "custom"
            },
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ],
                "source": "custom"
            }
        ],
        "exclude": [
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ],
                "source": "custom"
            },
            {
                "name": "generated",
                "property_values": [
                    "generated",
                    "generated"
                ],
                "source": "custom"
            }
        ]
    }
}';

    public function __construct(#[MapFrom('ref_name')]
    public RefName|null $refName, #[MapFrom('repository_property')]
    public RepositoryProperty $repositoryProperty,)
    {
    }
}
