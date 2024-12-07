<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json;

use ApiClients\Client\GitHub\Contract\RepositoryRuleRequiredDeployments;
use ApiClients\Client\GitHub\Contract\RepositoryRuleRulesetInfo;
use ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredDeployments\Parameters;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Five implements RepositoryRuleRequiredDeployments, RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "required_deployments",
            "required": [
                "type"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "enum": [
                        "required_deployments"
                    ],
                    "type": "string"
                },
                "parameters": {
                    "required": [
                        "required_deployment_environments"
                    ],
                    "type": "object",
                    "properties": {
                        "required_deployment_environments": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            },
                            "description": "The environments that must be successfully deployed to before branches can be merged."
                        }
                    }
                }
            },
            "description": "Choose which environments must be successfully deployed to before refs can be pushed into a ref that matches this rule."
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
    "type": "required_deployments",
    "parameters": {
        "required_deployment_environments": [
            "generated",
            "generated"
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
