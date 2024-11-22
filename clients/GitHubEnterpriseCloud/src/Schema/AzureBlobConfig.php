<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AzureBlobConfig
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'AzureBlobConfig';
    public const SCHEMA_DESCRIPTION  = 'Azure Blob Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key_id": "generated",
    "encrypted_sas_url": "generated"
}';

    /**
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     */
    public function __construct(#[MapFrom('key_id')]
    public string $keyId, #[MapFrom('encrypted_sas_url')]
    public string $encryptedSasUrl,)
    {
    }
}
