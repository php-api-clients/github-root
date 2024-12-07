<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T7FF8EB03\T65994103\T57F67FE5;

use ApiClients\Client\GitHub\Contract\Actions\UpdateRepoVariable\Request\ApplicationJson;

abstract readonly class T5CCF02E8 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the variable."
        },
        "value": {
            "type": "string",
            "description": "The value of the variable."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "value": "generated"
}';

    /**
     * name: The name of the variable.
     * value: The value of the variable.
     */
    public function __construct(public string|null $name, public string|null $value)
    {
    }
}
