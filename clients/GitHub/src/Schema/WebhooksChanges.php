<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class WebhooksChanges implements \ApiClients\Client\GitHub\Contract\WebhooksChanges
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "body": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the body."
                }
            }
        }
    },
    "description": "The changes to the comment."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhooksChanges\Body $body)
    {
    }
}
