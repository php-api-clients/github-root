<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8463F37D\TA64144EF\T1BF426F5;

abstract readonly class T247A222A implements \ApiClients\Client\GitHub\Contract\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable\Errors
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "code": "generated",
    "message": "generated"
}';
    public function __construct(public ?string $code, public ?string $message)
    {
    }
}
