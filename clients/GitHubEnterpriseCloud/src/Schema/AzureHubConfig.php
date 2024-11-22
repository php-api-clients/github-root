<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AzureHubConfig
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'AzureHubConfig';
    public const SCHEMA_DESCRIPTION  = 'Azure Event Hubs Config for audit log streaming configuration.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "encrypted_connstring": "generated",
    "key_id": "generated"
}';

    /**
     * name: Instance name of Azure Event Hubs
     * encryptedConnstring: Encrypted Connection String for Azure Event Hubs
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     */
    public function __construct(public string $name, #[MapFrom('encrypted_connstring')]
    public string $encryptedConnstring, #[MapFrom('key_id')]
    public string $keyId,)
    {
    }
}
