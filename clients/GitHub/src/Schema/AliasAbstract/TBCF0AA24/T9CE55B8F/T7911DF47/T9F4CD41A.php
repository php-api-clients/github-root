<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TBCF0AA24\T9CE55B8F\T7911DF47;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Identifiers;

abstract readonly class T9F4CD41A implements Identifiers
{
    public const SCHEMA_JSON         = '{
    "required": [
        "value",
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "type": "string"
        },
        "value": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "generated",
    "value": "generated"
}';

    public function __construct(public string $type, public string $value)
    {
    }
}
