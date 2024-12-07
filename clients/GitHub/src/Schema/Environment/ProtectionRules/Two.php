<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Environment\ProtectionRules;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Two implements \ApiClients\Client\GitHub\Contract\Environment\ProtectionRules\Two
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "node_id",
        "type"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "examples": [
                3515
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDQ6R2F0ZTM1MTU="
            ]
        },
        "type": {
            "type": "string",
            "examples": [
                "branch_policy"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "type": "generated"
}';

    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $type,)
    {
    }
}
