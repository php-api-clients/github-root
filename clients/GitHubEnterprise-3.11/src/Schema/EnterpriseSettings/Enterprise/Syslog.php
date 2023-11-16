<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Syslog
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
        "protocol_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled": false,
    "server": "generated",
    "protocol_name": "generated"
}';

    public function __construct(public bool|null $enabled, public string|null $server, #[MapFrom('protocol_name')]
    public string|null $protocolName,)
    {
    }
}
