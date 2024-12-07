<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T5AC3402A\TC1416C73\TB92827C1;

use ApiClients\Client\GitHub\Contract\WebhookMilestoneEdited\Changes\Title;

abstract readonly class TE5472178 implements Title
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the title if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the title if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
