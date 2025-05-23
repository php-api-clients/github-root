<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietFA125E0A\TietE31E9C15\Tiet5F33BC89;

abstract readonly class Tiet9EE2A17F
{
    public const SCHEMA_JSON         = '{
    "anyOf": [
        {
            "title": "Interaction Limits",
            "required": [
                "limit",
                "origin",
                "expires_at"
            ],
            "type": "object",
            "properties": {
                "limit": {
                    "enum": [
                        "existing_users",
                        "contributors_only",
                        "collaborators_only"
                    ],
                    "type": "string",
                    "description": "The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.",
                    "examples": [
                        "collaborators_only"
                    ]
                },
                "origin": {
                    "type": "string",
                    "examples": [
                        "repository"
                    ]
                },
                "expires_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2018-08-17T04:18:39Z"
                    ]
                }
            },
            "description": "Interaction limit settings."
        },
        {
            "type": "object",
            "properties": {},
            "additionalProperties": false
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
