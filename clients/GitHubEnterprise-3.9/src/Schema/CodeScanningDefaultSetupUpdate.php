<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningDefaultSetupUpdate
{
    public const SCHEMA_JSON         = '{
    "required": [
        "state"
    ],
    "type": "object",
    "properties": {
        "state": {
            "enum": [
                "configured",
                "not-configured"
            ],
            "type": "string",
            "description": "The desired state of code scanning default setup."
        },
        "query_suite": {
            "enum": [
                "default",
                "extended"
            ],
            "type": "string",
            "description": "CodeQL query suite to be used."
        }
    },
    "description": "Configuration for code scanning default setup.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Configuration for code scanning default setup.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "state": "configured",
    "query_suite": "default"
}';

    /**
     * state: The desired state of code scanning default setup.
     * querySuite: CodeQL query suite to be used.
     */
    public function __construct(public string $state, #[MapFrom('query_suite')]
    public string|null $querySuite,)
    {
    }
}
