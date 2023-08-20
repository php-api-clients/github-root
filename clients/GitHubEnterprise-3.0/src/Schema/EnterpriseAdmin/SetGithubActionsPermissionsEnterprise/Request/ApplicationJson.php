<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "enabled_organizations"
    ],
    "type": "object",
    "properties": {
        "enabled_organizations": {
            "enum": [
                "all",
                "none",
                "selected"
            ],
            "type": "string",
            "description": "The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`."
        },
        "allowed_actions": {
            "enum": [
                "all",
                "local_only",
                "selected"
            ],
            "type": "string",
            "description": "The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled_organizations": "all",
    "allowed_actions": "all"
}';

    /**
     * enabledOrganizations: The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions. Can be one of: `all`, `none`, or `selected`.
     * allowedActions: The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    public function __construct(#[MapFrom('enabled_organizations')]
    public string $enabledOrganizations, #[MapFrom('allowed_actions')]
    public string|null $allowedActions,)
    {
    }
}
