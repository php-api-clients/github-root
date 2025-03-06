<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest;

final readonly class Organization
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the organization."
        },
        "name": {
            "type": [
                "string",
                "null"
            ],
            "description": "The name of the organization."
        }
    },
    "description": "The organization associated with the repository the bypass request is for."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The organization associated with the repository the bypass request is for.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated"
}';

    /**
     * id: The ID of the organization.
     * name: The name of the organization.
     */
    public function __construct(public int|null $id, public string|null $name)
    {
    }
}
