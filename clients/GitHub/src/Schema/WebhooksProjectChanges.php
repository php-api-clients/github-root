<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksProjectChanges implements \ApiClients\Client\GitHub\Contract\WebhooksProjectChanges
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "archived_at": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "archived_at": {
        "from": "1970-01-01T00:00:00+00:00",
        "to": "1970-01-01T00:00:00+00:00"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('archived_at')] public ?\ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt $archivedAt)
    {
    }
}
