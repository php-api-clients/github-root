<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SecretScanning\UpdateAlert\Request;

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
                "resolved"
            ],
            "type": "string",
            "description": "Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."
        },
        "resolution": {
            "enum": [
                "false_positive",
                "wont_fix",
                "revoked",
                "used_in_tests",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the `state` is `resolved`.** The reason for resolving the alert."
        },
        "resolution_comment": {
            "type": [
                "string",
                "null"
            ],
            "description": "An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "open",
    "resolution": "used_in_tests",
    "resolution_comment": "generated"
}';

    /**
     * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
     * resolutionComment: An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    public function __construct(public string $state, public string|null $resolution, #[MapFrom('resolution_comment')]
    public string|null $resolutionComment,)
    {
    }
}
