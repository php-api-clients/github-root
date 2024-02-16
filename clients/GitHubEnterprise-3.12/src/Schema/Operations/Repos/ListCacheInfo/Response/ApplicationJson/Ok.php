<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\ListCacheInfo\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "host",
        "location",
        "git"
    ],
    "type": "object",
    "properties": {
        "host": {
            "type": "string"
        },
        "location": {
            "type": "string"
        },
        "git": {
            "required": [
                "sync_status",
                "last_sync"
            ],
            "type": "object",
            "properties": {
                "sync_status": {
                    "enum": [
                        "offline",
                        "inactive",
                        "in_sync",
                        "not_in_sync"
                    ],
                    "type": "string"
                },
                "last_sync": {
                    "type": "string",
                    "format": "date-time"
                }
            }
        }
    },
    "description": "Status for a cache replica"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Status for a cache replica';
    public const SCHEMA_EXAMPLE_DATA = '{
    "host": "generated",
    "location": "generated",
    "git": {
        "sync_status": "offline",
        "last_sync": "1970-01-01T00:00:00+00:00"
    }
}';

    public function __construct(public string $host, public string $location, public Schema\Operations\Repos\ListCacheInfo\Response\ApplicationJson\Ok\Git $git)
    {
    }
}
