<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8F4D3A54\T370CC577\T7DC54DEF;

use ApiClients\Client\GitHub\Contract\Repos\SetStatusCheckContexts\Request\ApplicationJson;

abstract readonly class T65BAB167 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "contexts"
            ],
            "type": "object",
            "properties": {
                "contexts": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "The name of the status checks"
                }
            },
            "example": {
                "contexts": [
                    "contexts"
                ]
            }
        },
        {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The name of the status checks"
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
