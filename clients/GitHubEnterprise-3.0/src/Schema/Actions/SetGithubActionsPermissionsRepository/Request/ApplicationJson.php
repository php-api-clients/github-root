<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\SetGithubActionsPermissionsRepository\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "enabled"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean",
            "description": "Whether GitHub Actions is enabled on the repository."
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
    "enabled": false,
    "allowed_actions": "all"
}';

    /**
     * enabled: Whether GitHub Actions is enabled on the repository.
     * allowedActions: The permissions policy that controls the actions that are allowed to run. Can be one of: `all`, `local_only`, or `selected`.
     */
    public function __construct(public bool $enabled, #[MapFrom('allowed_actions')]
    public string|null $allowedActions,)
    {
    }
}
