<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\ProvisionAndInviteUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "userName",
        "name",
        "emails"
    ],
    "type": "object",
    "properties": {
        "userName": {
            "type": "string",
            "description": "Configured by the admin. Could be an email, login, or username",
            "examples": [
                "someone@example.com"
            ]
        },
        "displayName": {
            "type": "string",
            "description": "The name of the user, suitable for display to end-users",
            "examples": [
                "Jon Doe"
            ]
        },
        "name": {
            "required": [
                "givenName",
                "familyName"
            ],
            "type": "object",
            "properties": {
                "givenName": {
                    "type": "string"
                },
                "familyName": {
                    "type": "string"
                },
                "formatted": {
                    "type": "string"
                }
            },
            "example": {
                "givenName": "Jane",
                "familyName": "User"
            }
        },
        "emails": {
            "minItems": 1,
            "type": "array",
            "items": {
                "required": [
                    "value"
                ],
                "type": "object",
                "properties": {
                    "value": {
                        "type": "string"
                    },
                    "primary": {
                        "type": "boolean"
                    },
                    "type": {
                        "type": "string"
                    }
                }
            },
            "description": "user emails",
            "examples": [
                {
                    "value": "someone@example.com",
                    "primary": true
                },
                {
                    "value": "another@example.com",
                    "primary": false
                }
            ]
        },
        "schemas": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "externalId": {
            "type": "string"
        },
        "groups": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "active": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "userName": "someone@example.com",
    "displayName": "Jon Doe",
    "name": {
        "givenName": "Jane",
        "familyName": "User",
        "formatted": "generated"
    },
    "emails": [
        {
            "value": "another@example.com",
            "primary": false,
            "type": "generated"
        }
    ],
    "schemas": [
        "generated",
        "generated"
    ],
    "externalId": "generated",
    "groups": [
        "generated",
        "generated"
    ],
    "active": false
}';

    /**
     * userName: Configured by the admin. Could be an email, login, or username
     * displayName: The name of the user, suitable for display to end-users
     * emails: user emails
     */
    public function __construct(public string $userName, public string|null $displayName, public Schema\Scim\ProvisionAndInviteUser\Request\ApplicationJson\Name $name, public array $emails, public array|null $schemas, public string|null $externalId, public array|null $groups, public bool|null $active)
    {
    }
}
