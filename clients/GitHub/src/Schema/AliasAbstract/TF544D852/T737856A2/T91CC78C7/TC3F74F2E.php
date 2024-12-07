<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF544D852\T737856A2\T91CC78C7;

abstract readonly class TC3F74F2E implements \ApiClients\Client\GitHub\Contract\WebhookProjectCardEdited\Changes\Note
{
    const SCHEMA_JSON = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';
    public function __construct(public ?string $from)
    {
    }
}
