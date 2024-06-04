<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Billing\RemoveResourceFromCostCenter\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "users"
    ],
    "type": "object",
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The usernames of the users to remove from the cost center."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ]
}';

    /**
     * users: The usernames of the users to remove from the cost center.
     */
    public function __construct(public array $users)
    {
    }
}
