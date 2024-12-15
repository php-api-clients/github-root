<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ExemptionRequestPushRulesetBypass;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Data
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ruleset_id": 10,
    "ruleset_name": "generated",
    "total_violations": 16,
    "rule_type": "generated"
}';

    /**
     * rulesetId: The ID of the ruleset for the rules that were violated
     * rulesetName: The name of the ruleset for the rules that were violated
     * totalViolations: The number of violations
     * ruleType: The type of rule that was violated
     */
    public function __construct(#[MapFrom('ruleset_id')]
    public int|null $rulesetId, #[MapFrom('ruleset_name')]
    public string|null $rulesetName, #[MapFrom('total_violations')]
    public int|null $totalViolations, #[MapFrom('rule_type')]
    public string|null $ruleType,)
    {
    }
}
