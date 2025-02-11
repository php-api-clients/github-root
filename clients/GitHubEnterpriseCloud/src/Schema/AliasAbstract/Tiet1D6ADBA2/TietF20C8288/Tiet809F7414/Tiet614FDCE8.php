<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet1D6ADBA2\TietF20C8288\Tiet809F7414;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\EnterpriseAdmin\CreateAuditLogStream\Request\ApplicationJson\VendorSpecific;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet614FDCE8
{
    public const SCHEMA_JSON         = '{
    "required": [
        "enabled",
        "stream_type",
        "vendor_specific"
    ],
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean",
            "description": "This setting pauses or resumes a stream."
        },
        "stream_type": {
            "enum": [
                "Azure Blob Storage",
                "Azure Event Hubs",
                "Amazon S3",
                "Splunk",
                "HTTPS Event Collector",
                "Google Cloud Storage",
                "Datadog"
            ],
            "type": "string",
            "description": "The audit log streaming provider. The name is case sensitive."
        },
        "vendor_specific": {
            "type": "object",
            "oneOf": [
                {
                    "title": "AzureBlobConfig",
                    "required": [
                        "key_id",
                        "encrypted_sas_url"
                    ],
                    "type": "object",
                    "properties": {
                        "key_id": {
                            "type": "string",
                            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
                        },
                        "encrypted_sas_url": {
                            "type": "string"
                        }
                    },
                    "description": "Azure Blob Config for audit log streaming configuration."
                },
                {
                    "title": "AzureHubConfig",
                    "required": [
                        "name",
                        "encrypted_connstring",
                        "key_id"
                    ],
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string",
                            "description": "Instance name of Azure Event Hubs"
                        },
                        "encrypted_connstring": {
                            "type": "string",
                            "description": "Encrypted Connection String for Azure Event Hubs"
                        },
                        "key_id": {
                            "type": "string",
                            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
                        }
                    },
                    "description": "Azure Event Hubs Config for audit log streaming configuration."
                },
                {
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
                },
                {
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
                },
                {
                    "title": "SplunkConfig",
                    "required": [
                        "domain",
                        "encrypted_token",
                        "key_id",
                        "port",
                        "ssl_verify"
                    ],
                    "type": "object",
                    "properties": {
                        "domain": {
                            "type": "string",
                            "description": "Domain of Splunk instance."
                        },
                        "port": {
                            "type": "integer",
                            "description": "The port number for connecting to Splunk."
                        },
                        "key_id": {
                            "type": "string",
                            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
                        },
                        "encrypted_token": {
                            "type": "string",
                            "description": "Encrypted Token."
                        },
                        "ssl_verify": {
                            "type": "boolean",
                            "description": "SSL verification helps ensure your events are sent to your Splunk endpoint securely."
                        }
                    },
                    "description": "Splunk Config for Audit Log Stream Configuration"
                },
                {
                    "title": "HecConfig",
                    "required": [
                        "domain",
                        "encrypted_token",
                        "path",
                        "key_id",
                        "port",
                        "ssl_verify"
                    ],
                    "type": "object",
                    "properties": {
                        "domain": {
                            "type": "string",
                            "description": "Domain of Hec instance."
                        },
                        "port": {
                            "type": "integer",
                            "description": "The port number for connecting to HEC."
                        },
                        "key_id": {
                            "type": "string",
                            "description": "Key ID obtained from the audit log stream key endpoint used to encrypt secrets."
                        },
                        "encrypted_token": {
                            "type": "string",
                            "description": "Encrypted Token."
                        },
                        "path": {
                            "type": "string",
                            "description": "Path to send events to."
                        },
                        "ssl_verify": {
                            "type": "boolean",
                            "description": "SSL verification helps ensure your events are sent to your HEC endpoint securely."
                        }
                    },
                    "description": "Hec Config for Audit Log Stream Configuration"
                },
                {
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
                },
                {
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
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "stream_type": "Azure Blob Storage",
    "vendor_specific": null
}';

    /**
     * enabled: This setting pauses or resumes a stream.
     * streamType: The audit log streaming provider. The name is case sensitive.
     */
    public function __construct(public bool $enabled, #[MapFrom('stream_type')]
    public string $streamType, #[MapFrom('vendor_specific')]
    #[VendorSpecific]
    public Schema\AzureBlobConfig|Schema\AzureHubConfig|Schema\AmazonS3OidcConfig|Schema\AmazonS3AccessKeysConfig|Schema\SplunkConfig|Schema\HecConfig|Schema\GoogleCloudConfig|Schema\DatadogConfig $vendorSpecific,)
    {
    }
}
