<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T35C6300C\T6FC8417E\TD1DC9061;

use ApiClients\Client\GitHub\Contract\ShortBranch\Commit;

abstract readonly class T517F1506 implements Commit
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sha",
        "url"
    ],
    "type": "object",
    "properties": {
        "sha": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public string $sha, public string $url)
    {
    }
}
