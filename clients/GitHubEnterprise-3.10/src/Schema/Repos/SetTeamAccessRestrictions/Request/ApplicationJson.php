<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\SetTeamAccessRestrictions\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "teams"
            ],
            "type": "object",
            "properties": {
                "teams": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The slug values for teams"
                }
            },
            "example": {
                "teams": [
                    "justice-league"
                ]
            }
        },
        {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The slug values for teams"
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
