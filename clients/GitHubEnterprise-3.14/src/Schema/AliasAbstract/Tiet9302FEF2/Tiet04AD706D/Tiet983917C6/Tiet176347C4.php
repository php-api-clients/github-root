<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet9302FEF2\Tiet04AD706D\Tiet983917C6;

abstract readonly class Tiet176347C4
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "uid": {
            "type": "string"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "mail": {
            "type": [
                "string",
                "null"
            ]
        },
        "key": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "uid": "generated",
    "name": "generated",
    "mail": "generated",
    "key": "generated"
}';

    public function __construct(public string|null $uid, public string|null $name, public string|null $mail, public string|null $key)
    {
    }
}
