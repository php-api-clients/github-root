<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class OrganizationCustomRepositoryRole
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'Organization Custom Repository Role';
    public const SCHEMA_DESCRIPTION  = 'Custom repository roles created by organization administrators';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated"
}';

    /**
     * id: The unique identifier of the custom role.
     * name: The name of the custom role.
     */
    public function __construct(public int $id, public string $name)
    {
    }
}
