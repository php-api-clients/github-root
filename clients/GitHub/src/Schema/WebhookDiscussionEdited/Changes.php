<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookDiscussionEdited\Changes
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
                    "type": "string"
                }
            }
        },
        "title": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    },
    "title": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited\Changes\Body $body, public ?\ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited\Changes\Title $title)
    {
    }
}
