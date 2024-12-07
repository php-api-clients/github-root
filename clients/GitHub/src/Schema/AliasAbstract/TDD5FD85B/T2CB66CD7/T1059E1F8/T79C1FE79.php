<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TDD5FD85B\T2CB66CD7\T1059E1F8;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Vulnerabilities\Package;

abstract readonly class T79C1FE79 implements Package
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ecosystem",
        "name"
    ],
    "type": "object",
    "properties": {
        "ecosystem": {
            "type": "string"
        },
        "name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ecosystem": "generated",
    "name": "generated"
}';

    public function __construct(public string $ecosystem, public string $name)
    {
    }
}
