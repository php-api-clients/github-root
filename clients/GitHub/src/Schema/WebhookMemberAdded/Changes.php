<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookMemberAdded\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "permission": {
            "required": [
                "to"
            ],
            "type": "object",
            "properties": {
                "to": {
                    "enum": [
                        "write",
                        "admin",
                        "read"
                    ],
                    "type": "string"
                }
            },
            "description": "This field is included for legacy purposes; use the `role_name` field instead. The `maintain`\\nrole is mapped to `write` and the `triage` role is mapped to `read`. To determine the role\\nassigned to the collaborator, use the `role_name` field instead, which will provide the full\\nrole name, including custom roles."
        },
        "role_name": {
            "required": [
                "to"
            ],
            "type": "object",
            "properties": {
                "to": {
                    "type": "string"
                }
            },
            "description": "The role assigned to the collaborator."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "permission": {
        "to": "write"
    },
    "role_name": {
        "to": "generated"
    }
}';
    /**
    * permission: This field is included for legacy purposes; use the `role_name` field instead. The `maintain`
    role is mapped to `write` and the `triage` role is mapped to `read`. To determine the role
    assigned to the collaborator, use the `role_name` field instead, which will provide the full
    role name, including custom roles.
    * roleName: The role assigned to the collaborator.
    */
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes\Permission $permission, #[\EventSauce\ObjectHydrator\MapFrom('role_name')] public ?\ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes\RoleName $roleName)
    {
    }
}
