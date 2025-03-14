<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Checks\SetSuitesPreferences\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "auto_trigger_checks": {
            "type": "array",
            "items": {
                "required": [
                    "app_id",
                    "setting"
                ],
                "type": "object",
                "properties": {
                    "app_id": {
                        "type": "integer",
                        "description": "The `id` of the GitHub App."
                    },
                    "setting": {
                        "type": "boolean",
                        "description": "Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.",
                        "default": true
                    }
                }
            },
            "description": "Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/checks#auto_trigger_checks-object) description for details."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "auto_trigger_checks": [
        {
            "app_id": 6,
            "setting": false
        },
        {
            "app_id": 6,
            "setting": false
        }
    ]
}';

    /**
     * autoTriggerChecks: Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://docs.github.com/enterprise-server@3.1/rest/reference/checks#auto_trigger_checks-object) description for details.
     */
    public function __construct(#[MapFrom('auto_trigger_checks')]
    public array|null $autoTriggerChecks,)
    {
    }
}
