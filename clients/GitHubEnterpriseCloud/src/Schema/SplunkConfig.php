<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SplunkConfig
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'SplunkConfig';
    public const SCHEMA_DESCRIPTION  = 'Splunk Config for Audit Log Stream Configuration';
    public const SCHEMA_EXAMPLE_DATA = '{
    "domain": "generated",
    "port": 4,
    "key_id": "generated",
    "encrypted_token": "generated",
    "ssl_verify": false
}';

    /**
     * domain: Domain of Splunk instance.
     * port: The port number for connecting to Splunk.
     * keyId: Key ID obtained from the audit log stream key endpoint used to encrypt secrets.
     * encryptedToken: Encrypted Token.
     * sslVerify: SSL verification helps ensure your events are sent to your Splunk endpoint securely.
     */
    public function __construct(public string $domain, public int $port, #[MapFrom('key_id')]
    public string $keyId, #[MapFrom('encrypted_token')]
    public string $encryptedToken, #[MapFrom('ssl_verify')]
    public bool $sslVerify,)
    {
    }
}
