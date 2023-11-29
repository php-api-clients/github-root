<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis;

final readonly class SecretScanningValidityChecks
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "type": "string",
            "description": "Can be `enabled` or `disabled`."
        }
    },
    "description": "Use the `status` property to enable or disable secret scanning automatic validity checks on supported partner tokens for this repository."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Use the `status` property to enable or disable secret scanning automatic validity checks on supported partner tokens for this repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "generated"
}';

    /**
     * status: Can be `enabled` or `disabled`.
     */
    public function __construct(public string|null $status)
    {
    }
}
