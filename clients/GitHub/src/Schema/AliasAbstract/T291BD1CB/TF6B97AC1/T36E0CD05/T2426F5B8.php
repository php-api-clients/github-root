<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T291BD1CB\TF6B97AC1\T36E0CD05;

use ApiClients\Client\GitHub\Contract\FileCommit\Commit\Author;

abstract readonly class T2426F5B8 implements Author
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "date": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "email": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "date": "generated",
    "name": "generated",
    "email": "generated"
}';

    public function __construct(public string|null $date, public string|null $name, public string|null $email)
    {
    }
}
