<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis;

final readonly class SecretScanningNonProviderPatterns
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "type": "string",
            "description": "Can be `enabled` or `disabled`."
        }
    },
    "description": "Use the `status` property to enable or disable secret scanning non-provider patterns for this repository. For more information, see \\"[Supported secret scanning patterns](\\/code-security\\/secret-scanning\\/introduction\\/supported-secret-scanning-patterns#supported-secrets).\\""
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Use the `status` property to enable or disable secret scanning non-provider patterns for this repository. For more information, see "[Supported secret scanning patterns](/code-security/secret-scanning/introduction/supported-secret-scanning-patterns#supported-secrets)."';
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
