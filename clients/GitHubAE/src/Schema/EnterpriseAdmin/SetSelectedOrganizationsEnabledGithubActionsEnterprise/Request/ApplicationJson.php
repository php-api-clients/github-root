<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "selected_organization_ids"
    ],
    "type": "object",
    "properties": {
        "selected_organization_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the organization."
            },
            "description": "List of organization IDs to enable for GitHub Actions."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "selected_organization_ids": [
        26,
        27
    ]
}';

    /**
     * selectedOrganizationIds: List of organization IDs to enable for GitHub Actions.
     */
    public function __construct(#[MapFrom('selected_organization_ids')]
    public array $selectedOrganizationIds,)
    {
    }
}
