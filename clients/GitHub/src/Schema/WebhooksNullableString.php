<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksNullableString implements \ApiClients\Client\GitHub\Contract\WebhooksNullableString
{
    public const SCHEMA_JSON         = '{
    "type": [
        "string",
        "null"
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
