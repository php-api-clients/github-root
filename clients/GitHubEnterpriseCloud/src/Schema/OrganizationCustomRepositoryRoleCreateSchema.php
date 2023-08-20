<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationCustomRepositoryRoleCreateSchema
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "base_role",
        "permissions"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the custom role."
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "A short description about who this role is for or what permissions it grants."
        },
        "base_role": {
            "enum": [
                "read",
                "triage",
                "write",
                "maintain"
            ],
            "type": "string",
            "description": "The system role from which this role inherits permissions."
        },
        "permissions": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of additional permissions included in this role."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "base_role": "read",
    "permissions": [
        "generated",
        "generated"
    ]
}';

    /**
     * name: The name of the custom role.
     * description: A short description about who this role is for or what permissions it grants.
     * baseRole: The system role from which this role inherits permissions.
     * permissions: A list of additional permissions included in this role.
     */
    public function __construct(public string $name, public string|null $description, #[MapFrom('base_role')]
    public string $baseRole, public array $permissions,)
    {
    }
}
