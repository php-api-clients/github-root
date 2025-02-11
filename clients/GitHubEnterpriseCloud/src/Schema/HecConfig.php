<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class HecConfig
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'HecConfig';
    public const SCHEMA_DESCRIPTION  = 'Hec Config for Audit Log Stream Configuration';
    public const SCHEMA_EXAMPLE_DATA = '{
    "domain": "generated",
    "port": 4,
    "key_id": "generated",
    "encrypted_token": "generated",
    "path": "generated",
    "ssl_verify": false
}';

    /**
     * domain: Domain of Hec instance.
     * port: The port number for connecting to HEC.
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     * encryptedToken: Encrypted Token.
     * path: Path to send events to.
     * sslVerify: SSL verification helps ensure your events are sent to your HEC endpoint securely.
     */
    public function __construct(public string $domain, public int $port, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('encrypted_token')]
    public string $encryptedToken, public string $path, #[MapFrom('ssl_verify')]
    public bool $sslVerify,)
    {
    }
}
