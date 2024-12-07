<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TC248750F\T7D6F0E43\TB5F7A5C5;

use ApiClients\Client\GitHub\Contract\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TBF973B47 implements Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "variables"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "variables": {
            "type": "array",
            "items": {
                "title": "Actions Variable",
                "required": [
                    "name",
                    "value",
                    "created_at",
                    "updated_at"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "The name of the variable.",
                        "examples": [
                            "USERNAME"
                        ]
                    },
                    "value": {
                        "type": "string",
                        "description": "The value of the variable.",
                        "examples": [
                            "octocat"
                        ]
                    },
                    "created_at": {
                        "type": "string",
                        "description": "The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
                        "format": "date-time",
                        "examples": [
                            "2019-01-24T22:45:36.000Z"
                        ]
                    },
                    "updated_at": {
                        "type": "string",
                        "description": "The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.",
                        "format": "date-time",
                        "examples": [
                            "2019-01-24T22:45:36.000Z"
                        ]
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "variables": [
        {
            "name": "generated",
            "value": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "name": "generated",
            "value": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $variables,)
    {
    }
}
