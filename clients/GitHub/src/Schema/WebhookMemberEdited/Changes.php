<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMemberEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookMemberEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "old_permission": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous permissions of the collaborator if the action was edited."
                }
            }
        },
        "permission": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    },
    "description": "The changes to the collaborator permissions"
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    const SCHEMA_EXAMPLE_DATA = '{
    "old_permission": {
        "from": "generated"
    },
    "permission": {
        "from": "generated",
        "to": "generated"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('old_permission')] public ?\ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\OldPermission $oldPermission, public ?\ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes\Permission $permission)
    {
    }
}
