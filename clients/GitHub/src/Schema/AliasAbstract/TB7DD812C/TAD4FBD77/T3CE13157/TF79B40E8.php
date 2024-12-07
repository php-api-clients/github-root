<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TB7DD812C\TAD4FBD77\T3CE13157;

use ApiClients\Client\GitHub\Contract\Projects\CreateForOrg\Request\ApplicationJson;

abstract readonly class TF79B40E8 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the project."
        },
        "body": {
            "type": "string",
            "description": "The description of the project."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "body": "generated"
}';

    /**
     * name: The name of the project.
     * body: The description of the project.
     */
    public function __construct(public string $name, public string|null $body)
    {
    }
}
