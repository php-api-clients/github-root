<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class UserRole
{
    public const SCHEMA_JSON         = '{
    "required": [
        "value"
    ],
    "type": "object",
    "properties": {
        "display": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "value": {
            "enum": [
                "user",
                "27d9891d-2c17-4f45-a262-781a0e55c80a",
                "guest_collaborator",
                "1ebc4a02-e56c-43a6-92a5-02ee09b90824",
                "enterprise_owner",
                "981df190-8801-4618-a08a-d91f6206c954",
                "ba4987ab-a1c3-412a-b58c-360fc407cb10",
                "billing_manager",
                "0e338b8c-cc7f-498a-928d-ea3470d7e7e3",
                "e6be2762-e4ad-4108-b72d-1bbe884a0f91"
            ],
            "type": "string",
            "description": "The role value representing a user role in GitHub.",
            "examples": [
                "user"
            ]
        },
        "primary": {
            "type": "boolean",
            "description": "Is the role a primary role for the user.",
            "examples": [
                false
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "display": "generated",
    "type": "generated",
    "value": "user",
    "primary": false
}';

    /**
     * value: The role value representing a user role in GitHub.
     * primary: Is the role a primary role for the user.
     */
    public function __construct(public string|null $display, public string|null $type, public string $value, public bool|null $primary)
    {
    }
}
