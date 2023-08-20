<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\AddOrUpdateRepoPermissionsLegacy\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "permission": {
            "enum": [
                "pull",
                "push",
                "admin"
            ],
            "type": "string",
            "description": "The permission to grant the team on this repository. Can be one of:  \\n\\\\* `pull` - team members can pull, but not push to or administer this repository.  \\n\\\\* `push` - team members can pull and push, but not administer this repository.  \\n\\\\* `admin` - team members can pull, push and administer this repository.  \\n  \\nIf no permission is specified, the team\'s `permission` attribute will be used to determine what permission to grant the team on this repository."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": "admin"
}';

    /**
     * permission: The permission to grant the team on this repository. Can be one of:
    \* `pull` - team members can pull, but not push to or administer this repository.
    \* `push` - team members can pull and push, but not administer this repository.
    \* `admin` - team members can pull, push and administer this repository.

    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
     */
    public function __construct(public string|null $permission)
    {
    }
}
