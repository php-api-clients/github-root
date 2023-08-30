<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PatchSchema
{
    public const SCHEMA_JSON         = '{
    "required": [
        "Operations",
        "schemas"
    ],
    "type": "object",
    "properties": {
        "Operations": {
            "type": "array",
            "items": {
                "required": [
                    "op"
                ],
                "type": "object",
                "properties": {
                    "op": {
                        "enum": [
                            "add",
                            "replace",
                            "remove"
                        ],
                        "type": "string"
                    },
                    "path": {
                        "type": "string"
                    },
                    "value": {
                        "type": "string",
                        "description": "Corresponding \'value\' of that field specified by \'path\'"
                    }
                }
            },
            "description": "patch operations list"
        },
        "schemas": {
            "type": "array",
            "items": {
                "enum": [
                    "urn:ietf:params:scim:api:messages:2.0:PatchOp"
                ],
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "Operations": [
        {
            "op": "remove",
            "path": "generated",
            "value": "generated"
        },
        {
            "op": "remove",
            "path": "generated",
            "value": "generated"
        }
    ],
    "schemas": [
        "generated",
        "generated"
    ]
}';

    /**
     * operations: patch operations list
     */
    public function __construct(#[MapFrom('Operations')]
    public array $operations, public array $schemas,)
    {
    }
}
