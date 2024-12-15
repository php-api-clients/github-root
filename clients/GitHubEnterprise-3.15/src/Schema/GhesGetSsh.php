<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesGetSsh
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "key": {
            "type": "string",
            "description": "The full public key",
            "format": "ssh-key"
        },
        "fingerprint": {
            "type": "string",
            "description": "The fingerprint of the key",
            "format": "ssh-key fingerprint"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key": "generated",
    "fingerprint": "generated"
}';

    /**
     * key: The full public key
     * fingerprint: The fingerprint of the key
     */
    public function __construct(public string|null $key, public string|null $fingerprint)
    {
    }
}
