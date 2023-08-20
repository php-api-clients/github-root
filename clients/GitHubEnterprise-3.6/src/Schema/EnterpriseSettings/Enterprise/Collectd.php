<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

final readonly class Collectd
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enabled": {
            "type": "boolean"
        },
        "server": {
            "type": [
                "string",
                "null"
            ]
        },
        "port": {
            "type": "integer"
        },
        "encryption": {
            "type": [
                "string",
                "null"
            ]
        },
        "username": {
            "type": [
                "string",
                "null"
            ]
        },
        "password": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "server": "generated",
    "port": 4,
    "encryption": "generated",
    "username": "generated",
    "password": "generated"
}';

    public function __construct(public bool|null $enabled, public string|null $server, public int|null $port, public string|null $encryption, public string|null $username, public string|null $password)
    {
    }
}
