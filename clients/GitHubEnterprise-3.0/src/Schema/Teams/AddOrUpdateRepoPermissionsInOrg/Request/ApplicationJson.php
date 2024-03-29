<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\AddOrUpdateRepoPermissionsInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "permission": {
            "enum": [
                "pull",
                "push",
                "admin",
                "maintain",
                "triage"
            ],
            "type": "string",
            "description": "The permission to grant the team on this repository. Can be one of:  \\n\\\\* `pull` - team members can pull, but not push to or administer this repository.  \\n\\\\* `push` - team members can pull and push, but not administer this repository.  \\n\\\\* `admin` - team members can pull, push and administer this repository.  \\n\\\\* `maintain` - team members can manage the repository without access to sensitive or destructive actions. Recommended for project managers. Only applies to repositories owned by organizations.  \\n\\\\* `triage` - team members can proactively manage issues and pull requests without write access. Recommended for contributors who triage a repository. Only applies to repositories owned by organizations.  \\n  \\nIf no permission is specified, the team\'s `permission` attribute will be used to determine what permission to grant the team on this repository.",
            "default": "push"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": "triage"
}';

    /**
     * permission: The permission to grant the team on this repository. Can be one of:
    \* `pull` - team members can pull, but not push to or administer this repository.
    \* `push` - team members can pull and push, but not administer this repository.
    \* `admin` - team members can pull, push and administer this repository.
    \* `maintain` - team members can manage the repository without access to sensitive or destructive actions. Recommended for project managers. Only applies to repositories owned by organizations.
    \* `triage` - team members can proactively manage issues and pull requests without write access. Recommended for contributors who triage a repository. Only applies to repositories owned by organizations.

    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
     */
    public function __construct(public string|null $permission)
    {
    }
}
