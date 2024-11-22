<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DatadogConfig
{
    public const SCHEMA_JSON         = '{
    "title": "DatadogConfig",
    "required": [
        "encrypted_token",
        "site",
        "key_id"
    ],
    "type": "object",
    "properties": {
        "encrypted_token": {
            "type": "string",
            "description": "Encrypted Splunk token."
        },
        "site": {
            "enum": [
                "US",
                "US3",
                "US5",
                "EU1",
                "US1-FED",
                "AP1"
            ],
            "type": "string",
            "description": "Datadog Site to use."
        },
        "key_id": {
            "type": "string",
            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
        }
    },
    "description": "Datadog Config for audit log streaming configuration."
}';
    public const SCHEMA_TITLE        = 'DatadogConfig';
    public const SCHEMA_DESCRIPTION  = 'Datadog Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "encrypted_token": "generated",
    "site": "AP1",
    "key_id": "generated"
}';

    /**
     * encryptedToken: Encrypted Splunk token.
     * site: Datadog Site to use.
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     */
    public function __construct(#[MapFrom('encrypted_token')]
    public string $encryptedToken, public string $site, #[MapFrom('key_id')]
    public string $keyId,)
    {
    }
}
