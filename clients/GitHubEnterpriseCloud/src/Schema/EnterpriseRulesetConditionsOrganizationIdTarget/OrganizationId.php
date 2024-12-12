<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseRulesetConditionsOrganizationIdTarget;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationId
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization_ids": [
        17,
        18
    ]
}';

    /**
     * organizationIds: The organization IDs that the ruleset applies to. One of these IDs must match for the condition to pass.
     */
    public function __construct(#[MapFrom('organization_ids')]
    public array|null $organizationIds,)
    {
    }
}
