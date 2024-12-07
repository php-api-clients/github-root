<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8463F37D\TA64144EF\T1BF426F5;

use ApiClients\Client\GitHub\Contract\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable\Errors;

abstract readonly class T247A222A implements Errors
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "code": {
            "type": "string"
        },
        "message": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "code": "generated",
    "message": "generated"
}';

    public function __construct(public string|null $code, public string|null $message)
    {
    }
}
