<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class ExemptionRequestSecretScanning
{
    public const SCHEMA_JSON         = '{
    "title": "Secret scanning push protection exemption request data",
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "secret_scanning"
            ],
            "type": "string",
            "description": "The type of request"
        },
        "data": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "secret_type": {
                        "type": "string",
                        "description": "The type of secret that was detected"
                    },
                    "commits": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        },
                        "description": "The commits that introduced the secret"
                    }
                }
            },
            "description": "The data pertaining to the secret scanning push protections that are being requested to be bypassed."
        }
    },
    "description": "Secret scanning push protections that are being requested to be bypassed."
}';
    public const SCHEMA_TITLE        = 'Secret scanning push protection exemption request data';
    public const SCHEMA_DESCRIPTION  = 'Secret scanning push protections that are being requested to be bypassed.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "secret_scanning",
    "data": [
        {
            "secret_type": "generated",
            "commits": [
                "generated",
                "generated"
            ]
        },
        {
            "secret_type": "generated",
            "commits": [
                "generated",
                "generated"
            ]
        }
    ]
}';

    /**
     * type: The type of request
     * data: The data pertaining to the secret scanning push protections that are being requested to be bypassed.
     */
    public function __construct(public string|null $type, public array|null $data)
    {
    }
}
