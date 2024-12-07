<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD132835D\T06CE1ED3\TBF25165B;

use ApiClients\Client\GitHub\Contract\WebhooksPullRequest5\Base\Repo\Permissions;

abstract readonly class TEDAA71C5 implements Permissions
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pull",
        "push",
        "admin"
    ],
    "type": "object",
    "properties": {
        "admin": {
            "type": "boolean"
        },
        "maintain": {
            "type": "boolean"
        },
        "pull": {
            "type": "boolean"
        },
        "push": {
            "type": "boolean"
        },
        "triage": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "admin": false,
    "maintain": false,
    "pull": false,
    "push": false,
    "triage": false
}';

    public function __construct(public bool $admin, public bool|null $maintain, public bool $pull, public bool $push, public bool|null $triage)
    {
    }
}
