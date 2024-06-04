<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters\CostCenters;

final readonly class Resources
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "name": "generated"
}';

    /**
     * type: Type of the resource.
     * name: Name of the resource.
     */
    public function __construct(public string $type, public string $name)
    {
    }
}
