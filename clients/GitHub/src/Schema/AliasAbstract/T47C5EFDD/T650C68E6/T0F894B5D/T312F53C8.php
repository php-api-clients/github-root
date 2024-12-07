<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T47C5EFDD\T650C68E6\T0F894B5D;

use ApiClients\Client\GitHub\Contract\BranchProtection\RequiredLinearHistory;

abstract readonly class T312F53C8 implements RequiredLinearHistory
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false
}';

    public function __construct(public bool|null $enabled)
    {
    }
}
