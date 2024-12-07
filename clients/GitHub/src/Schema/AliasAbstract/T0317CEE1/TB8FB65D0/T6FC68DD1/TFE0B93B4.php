<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0317CEE1\TB8FB65D0\T6FC68DD1;

use ApiClients\Client\GitHub\Contract\CodeScanningAlertInstance\Message;

abstract readonly class TFE0B93B4 implements Message
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "text": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "text": "generated"
}';

    public function __construct(public string|null $text)
    {
    }
}
