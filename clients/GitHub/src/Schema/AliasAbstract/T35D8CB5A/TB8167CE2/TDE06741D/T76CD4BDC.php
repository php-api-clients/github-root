<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T35D8CB5A\TB8167CE2\TDE06741D;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion;

abstract readonly class T76CD4BDC implements FirstPatchedVersion
{
    public const SCHEMA_JSON         = '{
    "required": [
        "identifier"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "identifier": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "identifier": "generated"
}';

    public function __construct(public string $identifier)
    {
    }
}
