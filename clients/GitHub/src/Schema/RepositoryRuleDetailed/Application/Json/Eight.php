<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

use ApiClients\Client\GitHub\Contract\RepositoryRuleRequiredStatusChecks;
use ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredStatusChecks\Parameters;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Eight implements RepositoryRuleRequiredStatusChecks, RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "required_status_checks",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "required_status_checks"
                    ],
                    "type": "string"
                },
                "parameters": {
                    "required": [
                        "required_status_checks",
                        "strict_required_status_checks_policy"
                    ],
                    "type": "object",
                    "properties": {
                        "do_not_enforce_on_create": {
                            "type": "boolean",
                            "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                        },
                        "required_status_checks": {
                            "type": "array",
                            "items": {
                                "title": "StatusCheckConfiguration",
                                "required": [
                                    "context"
                                ],
                                "type": "object",
                                "properties": {
                                    "context": {
                                        "type": "string",
                                        "description": "The status check context name that must be present on the commit."
                                    },
                                    "integration_id": {
                                        "type": "integer",
                                        "description": "The optional integration ID that this status check must originate from."
                                    }
                                },
                                "description": "Required status check"
                            },
                            "description": "Status checks that are required."
                        },
                        "strict_required_status_checks_policy": {
                            "type": "boolean",
                            "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
                        }
                    }
                }
            },
            "description": "Choose which status checks must pass before the ref is updated. When enabled, commits must first be pushed to another ref where the checks pass."
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
    "type": "required_status_checks",
    "parameters": {
        "do_not_enforce_on_create": false,
        "required_status_checks": [
            {
                "context": "generated",
                "integration_id": 14
            },
            {
                "context": "generated",
                "integration_id": 14
            }
        ],
        "strict_required_status_checks_policy": false
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
