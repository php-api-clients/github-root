<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Actions\UpdateSelfHostedRunnerGroupForOrg\Request;

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
                "all",
                "private"
            ],
            "type": "string",
            "description": "Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories. Can be one of: `all`, `selected`, or `private`."
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
    "visibility": "private",
    "allows_public_repositories": false
}';

    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all repositories, select individual repositories, or all private repositories. Can be one of: `all`, `selected`, or `private`.
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     */
    public function __construct(public string $name, public string|null $visibility, #[MapFrom('allows_public_repositories')]
    public bool|null $allowsPublicRepositories,)
    {
    }
}
