<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseRulesetConditionsOrganizationNameTarget;

final readonly class OrganizationName
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "include": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of organization names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all organizations and ~EMUS to target all enterprise managed user accounts."
        },
        "exclude": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of organization names or patterns to exclude. The condition will not pass if any of these patterns match."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "include": [
        "generated",
        "generated"
    ],
    "exclude": [
        "generated",
        "generated"
    ]
}';

    /**
     * include: Array of organization names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all organizations and ~EMUS to target all enterprise managed user accounts.
     * exclude: Array of organization names or patterns to exclude. The condition will not pass if any of these patterns match.
     */
    public function __construct(public array|null $include, public array|null $exclude)
    {
    }
}
