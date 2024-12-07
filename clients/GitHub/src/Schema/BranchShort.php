<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema\BranchShort\Commit;

final readonly class BranchShort implements \ApiClients\Client\GitHub\Contract\BranchShort
{
    public const SCHEMA_JSON         = '{
    "title": "Branch Short",
    "required": [
        "name",
        "commit",
        "protected"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "commit": {
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
                    "type": "string"
                }
            }
        },
        "protected": {
            "type": "boolean"
        }
    },
    "description": "Branch Short"
}';
    public const SCHEMA_TITLE        = 'Branch Short';
    public const SCHEMA_DESCRIPTION  = 'Branch Short';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "commit": {
        "sha": "generated",
        "url": "generated"
    },
    "protected": false
}';

    public function __construct(public string $name, public Commit $commit, public bool $protected)
    {
    }
}
