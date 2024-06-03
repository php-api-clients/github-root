<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class GetAllCostCenters
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "costCenters": {
            "type": "array",
            "items": {
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
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "costCenters": [
        {
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
        },
        {
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
        }
    ]
}';

    public function __construct(public array|null $costCenters)
    {
    }
}
