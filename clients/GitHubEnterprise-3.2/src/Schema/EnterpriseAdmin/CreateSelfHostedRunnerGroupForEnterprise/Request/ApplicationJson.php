<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the runner group."
        },
        "visibility": {
            "enum": [
                "selected",
                "all"
            ],
            "type": "string",
            "description": "Visibility of a runner group. You can select all organizations or select individual organization."
        },
        "selected_organization_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the organization."
            },
            "description": "List of organization IDs that can access the runner group."
        },
        "runners": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the runner."
            },
            "description": "List of runner IDs to add to the runner group."
        },
        "allows_public_repositories": {
            "type": "boolean",
            "description": "Whether the runner group can be used by `public` repositories.",
            "default": false
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "visibility": "all",
    "selected_organization_ids": [
        26,
        27
    ],
    "runners": [
        8,
        9
    ],
    "allows_public_repositories": false
}';

    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all organizations or select individual organization.
     * selectedOrganizationIds: List of organization IDs that can access the runner group.
     * runners: List of runner IDs to add to the runner group.
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     */
    public function __construct(public string $name, public string|null $visibility, #[MapFrom('selected_organization_ids')]
    public array|null $selectedOrganizationIds, public array|null $runners, #[MapFrom('allows_public_repositories')]
    public bool|null $allowsPublicRepositories,)
    {
    }
}
