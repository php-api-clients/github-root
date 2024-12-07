<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TDAD93C96\T44EA9290\TC426850C;

use ApiClients\Client\GitHub\Contract\Projects\UpdateColumn\Request\ApplicationJson;

abstract readonly class TE15D7C55 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the project column",
            "examples": [
                "Remaining tasks"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated"
}';

    /**
     * name: Name of the project column
     */
    public function __construct(public string $name)
    {
    }
}
