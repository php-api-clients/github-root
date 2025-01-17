<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet03017575\Tiet04AEE22A\Tiet53BA831A;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet581BF720
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "machine_specs"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "machine_specs": {
            "type": "array",
            "items": {
                "title": "Github-owned VM details.",
                "required": [
                    "id",
                    "cpu_cores",
                    "memory_gb",
                    "storage_gb"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "The ID used for the `size` parameter when creating a new runner.",
                        "examples": [
                            "8-core"
                        ]
                    },
                    "cpu_cores": {
                        "type": "integer",
                        "description": "The number of cores.",
                        "examples": [
                            8
                        ]
                    },
                    "memory_gb": {
                        "type": "integer",
                        "description": "The available RAM for the machine spec.",
                        "examples": [
                            32
                        ]
                    },
                    "storage_gb": {
                        "type": "integer",
                        "description": "The available SSD storage for the machine spec.",
                        "examples": [
                            300
                        ]
                    }
                },
                "description": "Provides details of a particular machine spec."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "machine_specs": [
        {
            "id": "8-core",
            "cpu_cores": 8,
            "memory_gb": 32,
            "storage_gb": 300
        },
        {
            "id": "8-core",
            "cpu_cores": 8,
            "memory_gb": 32,
            "storage_gb": 300
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('machine_specs')]
    public array $machineSpecs,)
    {
    }
}
