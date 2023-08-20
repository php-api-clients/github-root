<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\AddCollaborator\Request;

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
            "description": "The permission to grant the collaborator. **Only valid on organization-owned repositories.**",
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
     * permission: The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    public function __construct(public string|null $permission)
    {
    }
}
