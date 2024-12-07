<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0CB51C69\TE939AB7B\TD52C4E0A;

use ApiClients\Client\GitHub\Contract\Team\Permissions;

abstract readonly class T05A5E968 implements Permissions
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pull",
        "triage",
        "push",
        "maintain",
        "admin"
    ],
    "type": "object",
    "properties": {
        "pull": {
            "type": "boolean"
        },
        "triage": {
            "type": "boolean"
        },
        "push": {
            "type": "boolean"
        },
        "maintain": {
            "type": "boolean"
        },
        "admin": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "pull": false,
    "triage": false,
    "push": false,
    "maintain": false,
    "admin": false
}';

    public function __construct(public bool $pull, public bool $triage, public bool $push, public bool $maintain, public bool $admin)
    {
    }
}
