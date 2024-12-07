<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0FCE66A6\T71ECC1B1\TC3D362CA;

abstract readonly class TD6E970B8 implements \ApiClients\Client\GitHub\Contract\GpgKey\Emails
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "email": {
            "type": "string"
        },
        "verified": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "email": "generated",
    "verified": false
}';
    public function __construct(public ?string $email, public ?bool $verified)
    {
    }
}
