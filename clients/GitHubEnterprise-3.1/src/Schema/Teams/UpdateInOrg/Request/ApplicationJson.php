<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\UpdateInOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the team."
        },
        "description": {
            "type": "string",
            "description": "The description of the team."
        },
        "privacy": {
            "enum": [
                "secret",
                "closed"
            ],
            "type": "string",
            "description": "The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. When a team is nested, the `privacy` for parent teams cannot be `secret`. The options are:  \\n**For a non-nested team:**  \\n\\\\* `secret` - only visible to organization owners and members of this team.  \\n\\\\* `closed` - visible to all members of this organization.  \\n**For a parent or child team:**  \\n\\\\* `closed` - visible to all members of this organization."
        },
        "permission": {
            "enum": [
                "pull",
                "push",
                "admin"
            ],
            "type": "string",
            "description": "**Deprecated**. The permission that new repositories will be added to the team with when none is specified.",
            "default": "pull"
        },
        "parent_team_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of a team to set as the parent team."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "privacy": "secret",
    "permission": "admin",
    "parent_team_id": 14
}';

    /**
     * name: The name of the team.
     * description: The description of the team.
     * privacy: The level of privacy this team should have. Editing teams without specifying this parameter leaves `privacy` intact. When a team is nested, the `privacy` for parent teams cannot be `secret`. The options are:
     * *For a non-nested team:**
    \* `secret` - only visible to organization owners and members of this team.
    \* `closed` - visible to all members of this organization.
     * *For a parent or child team:**
    \* `closed` - visible to all members of this organization.
     * permission: **Deprecated**. The permission that new repositories will be added to the team with when none is specified.
     * parentTeamId: The ID of a team to set as the parent team.
     */
    public function __construct(public string|null $name, public string|null $description, public string|null $privacy, public string|null $permission, #[MapFrom('parent_team_id')]
    public int|null $parentTeamId,)
    {
    }
}
