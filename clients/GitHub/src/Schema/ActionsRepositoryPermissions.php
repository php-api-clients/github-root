<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsRepositoryPermissions
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
            "description": "The permissions policy that controls the actions and reusable workflows that are allowed to run."
        },
        "selected_actions_url": {
            "type": "string",
            "description": "The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "allowed_actions": "all",
    "selected_actions_url": "generated"
}';

    /**
     * enabled: Whether GitHub Actions is enabled on the repository.
     * allowedActions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     * selectedActionsUrl: The API URL to use to get or set the actions and reusable workflows that are allowed to run, when `allowed_actions` is set to `selected`.
     */
    public function __construct(public bool $enabled, #[MapFrom('allowed_actions')]
    public string|null $allowedActions, #[MapFrom('selected_actions_url')]
    public string|null $selectedActionsUrl,)
    {
    }
}
