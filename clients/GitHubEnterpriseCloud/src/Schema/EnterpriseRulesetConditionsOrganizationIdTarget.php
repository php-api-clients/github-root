<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseRulesetConditionsOrganizationIdTarget
{
    public const SCHEMA_JSON         = '{
    "title": "Repository ruleset conditions for organization IDs",
    "required": [
        "organization_id"
    ],
    "type": "object",
    "properties": {
        "organization_id": {
            "type": "object",
            "properties": {
                "organization_ids": {
                    "type": "array",
                    "items": {
                        "type": "integer"
                    },
                    "description": "The organization IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                }
            }
        }
    },
    "description": "Parameters for an organization ID condition"
}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for organization IDs';
    public const SCHEMA_DESCRIPTION  = 'Parameters for an organization ID condition';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization_id": {
        "organization_ids": [
            17,
            18
        ]
    }
}';

    public function __construct(#[MapFrom('organization_id')]
    public Schema\EnterpriseRulesetConditionsOrganizationIdTarget\OrganizationId $organizationId,)
    {
    }
}
