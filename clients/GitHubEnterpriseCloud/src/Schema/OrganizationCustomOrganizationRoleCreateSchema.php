<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrganizationCustomOrganizationRoleCreateSchema
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "permissions"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the custom role."
        },
        "description": {
            "type": "string",
            "description": "A short description about the intended usage of this role or what permissions it grants."
        },
        "permissions": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of additional permissions included in this role."
        },
        "base_role": {
            "enum": [
                "read",
                "triage",
                "write",
                "maintain",
                "admin"
            ],
            "type": "string",
            "description": "The system role from which this role can inherit permissions."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "permissions": [
        "generated",
        "generated"
    ],
    "base_role": "read"
}';

    /**
     * name: The name of the custom role.
     * description: A short description about the intended usage of this role or what permissions it grants.
     * permissions: A list of additional permissions included in this role.
     * baseRole: The system role from which this role can inherit permissions.
     */
    public function __construct(public string $name, public string|null $description, public array $permissions, #[MapFrom('base_role')]
    public string|null $baseRole,)
    {
    }
}
