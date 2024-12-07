<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T682653DE\TCAC7B5F7\TAB0C425F;

use ApiClients\Client\GitHub\Contract\WebhookDiscussionCommentEdited\Changes\Body;

abstract readonly class TA08C8495 implements Body
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    public function __construct(public string $from)
    {
    }
}
