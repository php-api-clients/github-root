<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Teams\LinkExternalIdpGroupToTeamForOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "group_id"
    ],
    "type": "object",
    "properties": {
        "group_id": {
            "type": "integer",
            "description": "External Group Id",
            "examples": [
                1
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "group_id": 1
}';

    /**
     * groupId: External Group Id
     */
    public function __construct(#[MapFrom('group_id')]
    public int $groupId,)
    {
    }
}
