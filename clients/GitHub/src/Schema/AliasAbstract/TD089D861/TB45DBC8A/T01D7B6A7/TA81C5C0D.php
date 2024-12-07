<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD089D861\TB45DBC8A\T01D7B6A7;

abstract readonly class TA81C5C0D implements \ApiClients\Client\GitHub\Contract\WebhookProjectEdited\Changes\Body
{
    const SCHEMA_JSON = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the body if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';
    /**
     * from: The previous version of the body if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
