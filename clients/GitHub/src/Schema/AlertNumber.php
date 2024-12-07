<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class AlertNumber implements \ApiClients\Client\GitHub\Contract\AlertNumber
{
    const SCHEMA_JSON = '{
    "type": "integer",
    "description": "The security alert number.",
    "readOnly": true
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The security alert number.';
    const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
