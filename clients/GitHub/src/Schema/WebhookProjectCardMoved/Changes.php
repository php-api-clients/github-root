<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved\Changes
{
    const SCHEMA_JSON = '{
    "required": [
        "column_id"
    ],
    "type": "object",
    "properties": {
        "column_id": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "integer"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "column_id": {
        "from": 4
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('column_id')] public \ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\Changes\ColumnId $columnId)
    {
    }
}
