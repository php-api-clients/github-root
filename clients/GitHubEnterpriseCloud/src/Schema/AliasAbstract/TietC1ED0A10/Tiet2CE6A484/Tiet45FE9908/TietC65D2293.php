<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietC1ED0A10\Tiet2CE6A484\Tiet45FE9908;

abstract readonly class TietC65D2293
{
    public const SCHEMA_JSON         = '{
    "required": [
        "runners"
    ],
    "type": "object",
    "properties": {
        "runners": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the runner."
            },
            "description": "List of runner IDs to add to the runner group."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "runners": [
        8,
        9
    ]
}';

    /**
     * runners: List of runner IDs to add to the runner group.
     */
    public function __construct(public array $runners)
    {
    }
}
