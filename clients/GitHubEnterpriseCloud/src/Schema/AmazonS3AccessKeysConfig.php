<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AmazonS3AccessKeysConfig
{
    public const SCHEMA_JSON         = '{
    "title": "AmazonS3AccessKeysConfig",
    "required": [
        "authentication_type",
        "bucket",
        "encrypted_access_key_id",
        "encrypted_secret_key",
        "key_id",
        "region"
    ],
    "type": "object",
    "properties": {
        "bucket": {
            "type": "string",
            "description": "Amazon S3 Bucket Name."
        },
        "region": {
            "type": "string",
            "description": "Amazon S3 Bucket Name."
        },
        "key_id": {
            "type": "string",
            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
        },
        "authentication_type": {
            "enum": [
                "access_keys"
            ],
            "type": "string",
            "description": "Authentication Type for Amazon S3."
        },
        "encrypted_secret_key": {
            "type": "string",
            "description": "Encrypted AWS Secret Key."
        },
        "encrypted_access_key_id": {
            "type": "string",
            "description": "Encrypted AWS Access Key ID."
        }
    },
    "description": "Amazon S3 Access Keys Config for audit log streaming configuration."
}';
    public const SCHEMA_TITLE        = 'AmazonS3AccessKeysConfig';
    public const SCHEMA_DESCRIPTION  = 'Amazon S3 Access Keys Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bucket": "generated",
    "region": "generated",
    "key_id": "generated",
    "authentication_type": "access_keys",
    "encrypted_secret_key": "generated",
    "encrypted_access_key_id": "generated"
}';

    /**
     * bucket: Amazon S3 Bucket Name.
     * region: Amazon S3 Bucket Name.
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     * authenticationType: Authentication Type for Amazon S3.
     * encryptedSecretKey: Encrypted AWS Secret Key.
     * encryptedAccessKeyId: Encrypted AWS Access Key ID.
     */
    public function __construct(public string $bucket, public string $region, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('authentication_type')]
    public string $authenticationType, #[MapFrom('encrypted_secret_key')]
    public string $encryptedSecretKey, #[MapFrom('encrypted_access_key_id')]
    public string $encryptedAccessKeyId,)
    {
    }
}
