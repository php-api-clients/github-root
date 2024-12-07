<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectColumnEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectColumnEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "name": {
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
    "name": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookProjectColumnEdited\Changes\Name $name)
    {
    }
}
