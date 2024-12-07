<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TA6C458CB\T06A41796\TA61C9406;

use ApiClients\Client\GitHub\Contract\Gists\CreateComment\Request\ApplicationJson;

abstract readonly class TD9040D20 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "body"
    ],
    "type": "object",
    "properties": {
        "body": {
            "maxLength": 65535,
            "type": "string",
            "description": "The comment text.",
            "examples": [
                "Body of the attachment"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": "generated"
}';

    /**
     * body: The comment text.
     */
    public function __construct(public string $body)
    {
    }
}
