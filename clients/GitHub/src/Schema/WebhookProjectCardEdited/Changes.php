<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectCardEdited\Changes
{
    const SCHEMA_JSON = '{
    "required": [
        "note"
    ],
    "type": "object",
    "properties": {
        "note": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "note": {
        "from": "generated"
    }
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited\Changes\Note $note)
    {
    }
}
