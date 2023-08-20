<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\CodeScanning\UpdateAlert\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "state"
    ],
    "type": "object",
    "properties": {
        "state": {
            "enum": [
                "open",
                "dismissed"
            ],
            "type": "string",
            "description": "Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`."
        },
        "dismissed_reason": {
            "enum": [
                null,
                "false positive",
                "won\'t fix",
                "used in tests"
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won\'t fix`, and `used in tests`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "open",
    "dismissed_reason": "used in tests"
}';

    /**
     * state: Sets the state of the code scanning alert. Can be one of `open` or `dismissed`. You must provide `dismissed_reason` when you set the state to `dismissed`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    public function __construct(public string $state, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason,)
    {
    }
}
