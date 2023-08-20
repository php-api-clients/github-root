<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\SecretScanning\UpdateAlert\Request;

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
                null,
                "false_positive",
                "wont_fix",
                "revoked",
                "used_in_tests"
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the `state` is `resolved`.** The reason for resolving the alert."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "open",
    "resolution": "used_in_tests"
}';

    /**
     * state: Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     * resolution: **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public function __construct(public string $state, public string|null $resolution)
    {
    }
}
