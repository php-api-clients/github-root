<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class ExemptionRequestSecretScanningMetadata
{
    public const SCHEMA_JSON         = '{
    "title": "Secret Scanning Push Protection Exemption Request Metadata",
    "type": "object",
    "properties": {
        "label": {
            "type": "string",
            "description": "The label for the secret type"
        },
        "reason": {
            "enum": [
                "fixed_later",
                "false_positive",
                "tests"
            ],
            "type": "string",
            "description": "The reason for the exemption request"
        }
    },
    "description": "Metadata for a secret scanning push protection exemption request."
}';
    public const SCHEMA_TITLE        = 'Secret Scanning Push Protection Exemption Request Metadata';
    public const SCHEMA_DESCRIPTION  = 'Metadata for a secret scanning push protection exemption request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "label": "generated",
    "reason": "tests"
}';

    /**
     * label: The label for the secret type
     * reason: The reason for the exemption request
     */
    public function __construct(public string|null $label, public string|null $reason)
    {
    }
}
