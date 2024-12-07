<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectColumnEdited;

use ApiClients\Client\GitHub\Schema\WebhookProjectColumnEdited\Changes\Name;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookProjectColumnEdited\Changes
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": {
        "from": "generated"
    }
}';

    public function __construct(public Name|null $name)
    {
    }
}
