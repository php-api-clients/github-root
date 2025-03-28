<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Activity\MarkNotificationsAsRead\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "last_read_at": {
            "type": "string",
            "description": "Describes the last point that notifications were checked.",
            "format": "date-time"
        },
        "read": {
            "type": "boolean",
            "description": "Whether the notification has been read."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "last_read_at": "1970-01-01T00:00:00+00:00",
    "read": false
}';

    /**
     * lastReadAt: Describes the last point that notifications were checked.
     * read: Whether the notification has been read.
     */
    public function __construct(#[MapFrom('last_read_at')]
    public string|null $lastReadAt, public bool|null $read,)
    {
    }
}
