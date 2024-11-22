<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GoogleCloudConfig
{
    public const SCHEMA_JSON         = '{
    "title": "GoogleCloudConfig",
    "required": [
        "bucket",
        "key_id",
        "encrypted_json_credentials"
    ],
    "type": "object",
    "properties": {
        "bucket": {
            "type": "string",
            "description": "Google Cloud Bucket Name"
        },
        "key_id": {
            "type": "string",
            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
        },
        "encrypted_json_credentials": {
            "type": "string"
        }
    },
    "description": "Google Cloud Config for audit log streaming configuration."
}';
    public const SCHEMA_TITLE        = 'GoogleCloudConfig';
    public const SCHEMA_DESCRIPTION  = 'Google Cloud Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bucket": "generated",
    "key_id": "generated",
    "encrypted_json_credentials": "generated"
}';

    /**
     * bucket: Google Cloud Bucket Name
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     */
    public function __construct(public string $bucket, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('encrypted_json_credentials')]
    public string $encryptedJsonCredentials,)
    {
    }
}
