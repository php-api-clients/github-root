<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters;

final readonly class CostCenters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "name",
        "resources"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "string",
            "description": "ID of the cost center."
        },
        "name": {
            "type": "string",
            "description": "Name of the cost center."
        },
        "resources": {
            "type": "array",
            "items": {
                "required": [
                    "type",
                    "name"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "type": "string",
                        "description": "Type of the resource."
                    },
                    "name": {
                        "type": "string",
                        "description": "Name of the resource."
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": "generated",
    "name": "generated",
    "resources": [
        {
            "type": "generated",
            "name": "generated"
        },
        {
            "type": "generated",
            "name": "generated"
        }
    ]
}';

    /**
     * id: ID of the cost center.
     * name: Name of the cost center.
     */
    public function __construct(public string $id, public string $name, public array $resources)
    {
    }
}
