<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseRulesetConditionsOrganizationNameTarget
{
    public const SCHEMA_JSON         = '{
    "title": "Repository ruleset conditions for organization names",
    "required": [
        "organization_name"
    ],
    "type": "object",
    "properties": {
        "organization_name": {
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
        }
    },
    "description": "Parameters for an organization name condition"
}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for organization names';
    public const SCHEMA_DESCRIPTION  = 'Parameters for an organization name condition';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization_name": {
        "include": [
            "generated",
            "generated"
        ],
        "exclude": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(#[MapFrom('organization_name')]
    public Schema\EnterpriseRulesetConditionsOrganizationNameTarget\OrganizationName $organizationName,)
    {
    }
}
