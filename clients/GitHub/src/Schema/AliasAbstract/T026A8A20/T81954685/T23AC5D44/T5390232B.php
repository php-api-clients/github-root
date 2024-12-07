<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T026A8A20\T81954685\T23AC5D44;

use ApiClients\Client\GitHub\Contract\Issues\UpdateComment\Request\ApplicationJson;

abstract readonly class T5390232B implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body"
    ],
    "type": "object",
    "properties": {
        "body": {
            "type": "string",
            "description": "The contents of the comment."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": "generated"
}';

    /**
     * body: The contents of the comment.
     */
    public function __construct(public string $body)
    {
    }
}
