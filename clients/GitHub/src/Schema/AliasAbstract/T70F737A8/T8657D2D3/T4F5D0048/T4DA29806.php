<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T70F737A8\T8657D2D3\T4F5D0048;

use ApiClients\Client\GitHub\Contract\Repository\Permissions;

abstract readonly class T4DA29806 implements Permissions
{
    public const SCHEMA_JSON         = '{
    "required": [
        "admin",
        "pull",
        "push"
    ],
    "type": "object",
    "properties": {
        "admin": {
            "type": "boolean"
        },
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "admin": false,
    "pull": false,
    "triage": false,
    "push": false,
    "maintain": false
}';

    public function __construct(public bool $admin, public bool $pull, public bool|null $triage, public bool $push, public bool|null $maintain)
    {
    }
}
