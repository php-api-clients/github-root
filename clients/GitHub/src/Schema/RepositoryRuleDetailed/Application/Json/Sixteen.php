<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

use ApiClients\Client\GitHub\Contract\RepositoryRuleCodeScanning;
use ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo;
use ApiClients\Client\GitHub\Schema\RepositoryRuleCodeScanning\Parameters;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Sixteen implements RepositoryRuleCodeScanning, RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "code_scanning",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "code_scanning"
                    ],
                    "type": "string"
                },
                "parameters": {
                    "required": [
                        "code_scanning_tools"
                    ],
                    "type": "object",
                    "properties": {
                        "code_scanning_tools": {
                            "type": "array",
                            "items": {
                                "title": "CodeScanningTool",
                                "required": [
                                    "alerts_threshold",
                                    "security_alerts_threshold",
                                    "tool"
                                ],
                                "type": "object",
                                "properties": {
                                    "alerts_threshold": {
                                        "enum": [
                                            "none",
                                            "errors",
                                            "errors_and_warnings",
                                            "all"
                                        ],
                                        "type": "string",
                                        "description": "The severity level at which code scanning results that raise alerts block a reference update. For more information on alert severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                    },
                                    "security_alerts_threshold": {
                                        "enum": [
                                            "none",
                                            "critical",
                                            "high_or_higher",
                                            "medium_or_higher",
                                            "all"
                                        ],
                                        "type": "string",
                                        "description": "The severity level at which code scanning results that raise security alerts block a reference update. For more information on security severity levels, see \\"[About code scanning alerts](https:\\/\\/docs.github.com\\/code-security\\/code-scanning\\/managing-code-scanning-alerts\\/about-code-scanning-alerts#about-alert-severity-and-security-severity-levels).\\""
                                    },
                                    "tool": {
                                        "type": "string",
                                        "description": "The name of a code scanning tool"
                                    }
                                },
                                "description": "A tool that must provide code scanning results for this rule to pass."
                            },
                            "description": "Tools that must provide code scanning results for this rule to pass."
                        }
                    }
                }
            },
            "description": "Choose which tools must provide code scanning results before the reference is updated. When configured, code scanning must be enabled and have results for both the commit and the reference being updated."
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
    "type": "code_scanning",
    "parameters": {
        "code_scanning_tools": [
            {
                "alerts_threshold": "none",
                "security_alerts_threshold": "none",
                "tool": "generated"
            },
            {
                "alerts_threshold": "none",
                "security_alerts_threshold": "none",
                "tool": "generated"
            }
        ]
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
