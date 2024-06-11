<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class ExemptionRequestPushRulesetBypass
{
    public const SCHEMA_JSON         = '{
    "title": "Push ruleset bypass exemption request data",
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "push_ruleset_bypass"
            ],
            "type": "string",
            "description": "The type of request"
        },
        "data": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "ruleset_id": {
                        "type": "integer",
                        "description": "The ID of the ruleset for the rules that were violated"
                    },
                    "ruleset_name": {
                        "type": "string",
                        "description": "The name of the ruleset for the rules that were violated"
                    },
                    "total_violations": {
                        "type": "integer",
                        "description": "The number of violations"
                    },
                    "rule_type": {
                        "type": "string",
                        "description": "The type of rule that was violated"
                    }
                }
            },
            "description": "The data pertaining to the push rules that are being requested to be bypassed."
        }
    },
    "description": "Push rules that are being requested to be bypassed."
}';
    public const SCHEMA_TITLE        = 'Push ruleset bypass exemption request data';
    public const SCHEMA_DESCRIPTION  = 'Push rules that are being requested to be bypassed.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "push_ruleset_bypass",
    "data": [
        {
            "ruleset_id": 10,
            "ruleset_name": "generated",
            "total_violations": 16,
            "rule_type": "generated"
        },
        {
            "ruleset_id": 10,
            "ruleset_name": "generated",
            "total_violations": 16,
            "rule_type": "generated"
        }
    ]
}';

    /**
     * type: The type of request
     * data: The data pertaining to the push rules that are being requested to be bypassed.
     */
    public function __construct(public string|null $type, public array|null $data)
    {
    }
}
