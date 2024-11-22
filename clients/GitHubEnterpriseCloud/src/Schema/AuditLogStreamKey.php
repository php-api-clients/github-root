<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AuditLogStreamKey
{
    public const SCHEMA_JSON         = '{
    "title": "stream-key",
    "required": [
        "key_id",
        "key"
    ],
    "type": "object",
    "properties": {
        "key_id": {
            "type": "string"
        },
        "key": {
            "type": "string"
        }
    },
    "description": "Audit Log Streaming Public Key"
}';
    public const SCHEMA_TITLE        = 'stream-key';
    public const SCHEMA_DESCRIPTION  = 'Audit Log Streaming Public Key';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key_id": "generated",
    "key": "generated"
}';

    public function __construct(#[MapFrom('key_id')]
    public string $keyId, public string $key,)
    {
    }
}
