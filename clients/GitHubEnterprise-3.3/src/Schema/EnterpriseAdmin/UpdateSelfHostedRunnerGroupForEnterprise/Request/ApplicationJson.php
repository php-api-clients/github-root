<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
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
            "description": "Visibility of a runner group. You can select all organizations or select individual organizations.",
            "default": "all"
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
    "allows_public_repositories": false
}';

    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all organizations or select individual organizations.
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     */
    public function __construct(public string|null $name, public string|null $visibility, #[MapFrom('allows_public_repositories')]
    public bool|null $allowsPublicRepositories,)
    {
    }
}
