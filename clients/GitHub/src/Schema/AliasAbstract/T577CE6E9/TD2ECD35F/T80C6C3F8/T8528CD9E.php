<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T577CE6E9\TD2ECD35F\T80C6C3F8;

use ApiClients\Client\GitHub\Contract\WebhooksChanges\Body;

abstract readonly class T8528CD9E implements Body
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the body."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the body.
     */
    public function __construct(public string $from)
    {
    }
}
