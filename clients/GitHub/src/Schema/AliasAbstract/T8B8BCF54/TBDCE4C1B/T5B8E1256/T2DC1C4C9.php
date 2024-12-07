<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8B8BCF54\TBDCE4C1B\T5B8E1256;

use ApiClients\Client\GitHub\Contract\PullRequestMinimal\Head;
use ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo;

abstract readonly class T2DC1C4C9 implements Head
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ref",
        "sha",
        "repo"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        },
        "repo": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "sha": "generated",
    "repo": {
        "id": 2,
        "url": "generated",
        "name": "generated"
    }
}';

    public function __construct(public string $ref, public string $sha, public Repo $repo)
    {
    }
}
