<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

use ApiClients\Client\GitHub\Contract\RepositoryRuleBranchNamePattern;
use ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo;
use ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json\Thirteen\Parameters;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Thirteen implements RepositoryRuleBranchNamePattern, RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "branch_name_pattern",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "branch_name_pattern"
                    ],
                    "type": "string"
                },
                "parameters": {
                    "required": [
                        "operator",
                        "pattern"
                    ],
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string",
                            "description": "How this rule will appear to users."
                        },
                        "negate": {
                            "type": "boolean",
                            "description": "If true, the rule will fail if the pattern matches."
                        },
                        "operator": {
                            "enum": [
                                "starts_with",
                                "ends_with",
                                "contains",
                                "regex"
                            ],
                            "type": "string",
                            "description": "The operator to use for matching."
                        },
                        "pattern": {
                            "type": "string",
                            "description": "The pattern to match with."
                        }
                    }
                }
            },
            "description": "Parameters to be used for the branch_name_pattern rule"
        },
        {
            "title": "repository ruleset data for rule",
            "properties": {
                "ruleset_source_type": {
                    "enum": [
                        "Repository",
                        "Organization"
                    ],
                    "type": "string",
                    "description": "The type of source for the ruleset that includes this rule."
                },
                "ruleset_source": {
                    "type": "string",
                    "description": "The name of the source of the ruleset that includes this rule."
                },
                "ruleset_id": {
                    "type": "integer",
                    "description": "The ID of the ruleset that includes this rule."
                }
            },
            "description": "User-defined metadata to store domain-specific information limited to 8 keys with scalar values."
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "branch_name_pattern",
    "parameters": {
        "name": "generated",
        "negate": false,
        "operator": "starts_with",
        "pattern": "generated"
    },
    "ruleset_source_type": "Repository",
    "ruleset_source": "generated",
    "ruleset_id": 10
}';

    /**
     * rulesetSourceType: The type of source for the ruleset that includes this rule.
     * rulesetSource: The name of the source of the ruleset that includes this rule.
     * rulesetId: The ID of the ruleset that includes this rule.
     */
    public function __construct(public string $type, public Parameters|null $parameters, #[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId,)
    {
    }
}
