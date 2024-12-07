<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TEF18BFE0\TE1B3D88F\TF6D547A0;

use ApiClients\Client\GitHub\Contract\PullRequestMinimal\Head\Repo;

abstract readonly class T8236C017 implements Repo
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "url",
        "name"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "url": {
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
    "id": 2,
    "url": "generated",
    "name": "generated"
}';

    public function __construct(public int $id, public string $url, public string $name)
    {
    }
}
