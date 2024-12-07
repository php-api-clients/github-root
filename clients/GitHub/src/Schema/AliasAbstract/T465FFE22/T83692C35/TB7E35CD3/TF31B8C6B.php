<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T465FFE22\T83692C35\TB7E35CD3;

abstract readonly class TF31B8C6B implements \ApiClients\Client\GitHub\Contract\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok
{
    const SCHEMA_JSON = '{
    "required": [
        "total_count",
        "labels"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "labels": {
            "type": "array",
            "items": {
                "title": "Self hosted runner label",
                "required": [
                    "name"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "Unique identifier of the label."
                    },
                    "name": {
                        "type": "string",
                        "description": "Name of the label."
                    },
                    "type": {
                        "enum": [
                            "read-only",
                            "custom"
                        ],
                        "type": "string",
                        "description": "The type of label. Read-only labels are applied automatically when the runner is configured."
                    }
                },
                "description": "A label for a self hosted runner"
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "labels": [
        {
            "id": 2,
            "name": "generated",
            "type": "read-only"
        },
        {
            "id": 2,
            "name": "generated",
            "type": "read-only"
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, public array $labels)
    {
    }
}
