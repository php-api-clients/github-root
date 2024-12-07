<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T2627BD0F\T79C28288\TDDF35698;

use ApiClients\Client\GitHub\Contract\Repos\AddTeamAccessRestrictions\Request\ApplicationJson;

abstract readonly class TF49935EA implements ApplicationJson
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
                    "my-team"
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
