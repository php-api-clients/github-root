<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

final readonly class Six implements \ApiClients\Client\GitHub\Contract\RepositoryRuleRequiredSignatures, \ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo
{
    const SCHEMA_JSON = '{
    "allOf": [
        {
            "title": "required_signatures",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "required_signatures"
                    ],
                    "type": "string"
                }
            },
            "description": "Commits pushed to matching refs must have verified signatures."
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "type": "required_signatures",
    "ruleset_source_type": "Repository",
    "ruleset_source": "generated",
    "ruleset_id": 10
}';
    /**
     * rulesetSourceType: The type of source for the ruleset that includes this rule.
     * rulesetSource: The name of the source of the ruleset that includes this rule.
     * rulesetId: The ID of the ruleset that includes this rule.
     */
    public function __construct(public string $type, #[\EventSauce\ObjectHydrator\MapFrom('ruleset_source_type')] public ?string $rulesetSourceType, #[\EventSauce\ObjectHydrator\MapFrom('ruleset_source')] public ?string $rulesetSource, #[\EventSauce\ObjectHydrator\MapFrom('ruleset_id')] public ?int $rulesetId)
    {
    }
}
