<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer",
            "description": "The number of custom roles in this organization",
            "examples": [
                3
            ]
        },
        "custom_roles": {
            "type": "array",
            "items": {
                "title": "Organization Custom Repository Role",
                "required": [
                    "id",
                    "name"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The unique identifier of the custom role."
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the custom role."
                    }
                },
                "description": "Custom repository roles created by organization administrators"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 3,
    "custom_roles": [
        {
            "id": 2,
            "name": "generated"
        },
        {
            "id": 2,
            "name": "generated"
        }
    ]
}';

    /**
     * totalCount: The number of custom roles in this organization
     */
    public function __construct(#[MapFrom('total_count')]
    public int|null $totalCount, #[MapFrom('custom_roles')]
    public array|null $customRoles,)
    {
    }
}
