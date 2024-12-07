<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T64F93E7B\TEB03B140\T2B202B0B;

use ApiClients\Client\GitHub\Contract\RepositoryRuleCommitMessagePattern\Parameters;

abstract readonly class T2C35EA3B implements Parameters
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "negate": false,
    "operator": "starts_with",
    "pattern": "generated"
}';

    /**
     * name: How this rule will appear to users.
     * negate: If true, the rule will fail if the pattern matches.
     * operator: The operator to use for matching.
     * pattern: The pattern to match with.
     */
    public function __construct(public string|null $name, public bool|null $negate, public string $operator, public string $pattern)
    {
    }
}
