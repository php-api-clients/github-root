<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

use ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo;
use ApiClients\Client\GitHub\Contract\RepositoryRuleWorkflows;
use ApiClients\Client\GitHub\Schema\RepositoryRuleWorkflows\Parameters;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Fifteen implements RepositoryRuleWorkflows, RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "workflows",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "workflows"
                    ],
                    "type": "string"
                },
                "parameters": {
                    "required": [
                        "workflows"
                    ],
                    "type": "object",
                    "properties": {
                        "do_not_enforce_on_create": {
                            "type": "boolean",
                            "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                        },
                        "workflows": {
                            "type": "array",
                            "items": {
                                "title": "WorkflowFileReference",
                                "required": [
                                    "path",
                                    "repository_id"
                                ],
                                "type": "object",
                                "properties": {
                                    "path": {
                                        "type": "string",
                                        "description": "The path to the workflow file"
                                    },
                                    "ref": {
                                        "type": "string",
                                        "description": "The ref (branch or tag) of the workflow file to use"
                                    },
                                    "repository_id": {
                                        "type": "integer",
                                        "description": "The ID of the repository where the workflow is defined"
                                    },
                                    "sha": {
                                        "type": "string",
                                        "description": "The commit SHA of the workflow file to use"
                                    }
                                },
                                "description": "A workflow that must run for this rule to pass"
                            },
                            "description": "Workflows that must pass for this rule to pass."
                        }
                    }
                }
            },
            "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
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
    "type": "workflows",
    "parameters": {
        "do_not_enforce_on_create": false,
        "workflows": [
            {
                "path": "generated",
                "ref": "generated",
                "repository_id": 13,
                "sha": "generated"
            },
            {
                "path": "generated",
                "ref": "generated",
                "repository_id": 13,
                "sha": "generated"
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
