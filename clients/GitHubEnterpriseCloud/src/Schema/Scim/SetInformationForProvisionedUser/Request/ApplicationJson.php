<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\SetInformationForProvisionedUser\Request;

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
        "schemas": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "displayName": {
            "type": "string",
            "description": "The name of the user, suitable for display to end-users",
            "examples": [
                "Jon Doe"
            ]
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
        },
        "userName": {
            "type": "string",
            "description": "Configured by the admin. Could be an email, login, or username",
            "examples": [
                "someone@example.com"
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
                    "type": {
                        "type": "string"
                    },
                    "value": {
                        "type": "string"
                    },
                    "primary": {
                        "type": "boolean"
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "schemas": [
        "generated",
        "generated"
    ],
    "displayName": "Jon Doe",
    "externalId": "generated",
    "groups": [
        "generated",
        "generated"
    ],
    "active": false,
    "userName": "someone@example.com",
    "name": {
        "givenName": "Jane",
        "familyName": "User",
        "formatted": "generated"
    },
    "emails": [
        {
            "type": "generated",
            "value": "another@example.com",
            "primary": false
        }
    ]
}';

    /**
     * displayName: The name of the user, suitable for display to end-users
     * userName: Configured by the admin. Could be an email, login, or username
     * emails: user emails
     */
    public function __construct(public array|null $schemas, public string|null $displayName, public string|null $externalId, public array|null $groups, public bool|null $active, public string $userName, public Schema\Scim\SetInformationForProvisionedUser\Request\ApplicationJson\Name $name, public array $emails)
    {
    }
}
