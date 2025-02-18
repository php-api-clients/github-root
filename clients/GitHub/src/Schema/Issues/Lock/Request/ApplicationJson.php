<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issues\Lock\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "lock_reason": {
            "enum": [
                "off-topic",
                "too heated",
                "resolved",
                "spam"
            ],
            "type": "string",
            "description": "The reason for locking the issue or pull request conversation. Lock will fail if you don\'t use one of these reasons:  \\n * `off-topic`  \\n * `too heated`  \\n * `resolved`  \\n * `spam`"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "lock_reason": "off-topic"
}';

    /**
     * lockReason: The reason for locking the issue or pull request conversation. Lock will fail if you don't use one of these reasons:
     * `off-topic`
     * `too heated`
     * `resolved`
     * `spam`
     */
    public function __construct(#[MapFrom('lock_reason')]
    public string|null $lockReason,)
    {
    }
}
