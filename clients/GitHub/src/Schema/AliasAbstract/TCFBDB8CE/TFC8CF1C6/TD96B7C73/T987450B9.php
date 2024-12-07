<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TCFBDB8CE\TFC8CF1C6\TD96B7C73;

abstract readonly class T987450B9 implements \ApiClients\Client\GitHub\Contract\WebhookMemberEdited\Changes\Permission
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "string",
                "null"
            ]
        },
        "to": {
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
    "from": "generated",
    "to": "generated"
}';
    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
