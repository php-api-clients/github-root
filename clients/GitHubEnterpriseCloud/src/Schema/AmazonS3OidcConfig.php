<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AmazonS3OidcConfig
{
    public const SCHEMA_JSON         = '{
    "title": "AmazonS3OIDCConfig",
    "required": [
        "arn_role",
        "authentication_type",
        "bucket",
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
            "description": "AWS S3 Bucket Region."
        },
        "key_id": {
            "type": "string",
            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
        },
        "authentication_type": {
            "enum": [
                "oidc"
            ],
            "type": "string",
            "description": "Authentication Type for Amazon S3."
        },
        "arn_role": {
            "type": "string"
        }
    },
    "description": "Amazon S3 OIDC Config for audit log streaming configuration."
}';
    public const SCHEMA_TITLE        = 'AmazonS3OIDCConfig';
    public const SCHEMA_DESCRIPTION  = 'Amazon S3 OIDC Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bucket": "generated",
    "region": "generated",
    "key_id": "generated",
    "authentication_type": "oidc",
    "arn_role": "generated"
}';

    /**
     * bucket: Amazon S3 Bucket Name.
     * region: AWS S3 Bucket Region.
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     * authenticationType: Authentication Type for Amazon S3.
     */
    public function __construct(public string $bucket, public string $region, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('authentication_type')]
    public string $authenticationType, #[MapFrom('arn_role')]
    public string $arnRole,)
    {
    }
}
