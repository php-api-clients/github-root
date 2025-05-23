<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Teams\CreateOrUpdateIdpGroupConnectionsLegacy\Request\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Groups
{
    public const SCHEMA_JSON         = '{
    "required": [
        "group_id",
        "group_name",
        "group_description"
    ],
    "type": "object",
    "properties": {
        "group_id": {
            "type": "string",
            "description": "ID of the IdP group."
        },
        "group_name": {
            "type": "string",
            "description": "Name of the IdP group."
        },
        "group_description": {
            "type": "string",
            "description": "Description of the IdP group."
        },
        "id": {
            "type": "string",
            "examples": [
                "\\"caceab43fc9ffa20081c\\""
            ]
        },
        "name": {
            "type": "string",
            "examples": [
                "\\"external-team-6c13e7288ef7\\""
            ]
        },
        "description": {
            "type": "string",
            "examples": [
                "\\"moar cheese pleese\\""
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "group_id": "generated",
    "group_name": "generated",
    "group_description": "generated",
    "id": "\\"caceab43fc9ffa20081c\\"",
    "name": "\\"external-team-6c13e7288ef7\\"",
    "description": "\\"moar cheese pleese\\""
}';

    /**
     * groupId: ID of the IdP group.
     * groupName: Name of the IdP group.
     * groupDescription: Description of the IdP group.
     */
    public function __construct(#[MapFrom('group_id')]
    public string $groupId, #[MapFrom('group_name')]
    public string $groupName, #[MapFrom('group_description')]
    public string $groupDescription, public string|null $id, public string|null $name, public string|null $description,)
    {
    }
}
