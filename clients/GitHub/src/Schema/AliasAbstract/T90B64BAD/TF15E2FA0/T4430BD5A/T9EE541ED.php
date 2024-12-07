<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T90B64BAD\TF15E2FA0\T4430BD5A;

use ApiClients\Client\GitHub\Contract\WebhookLabelEdited\Changes\Description;

abstract readonly class T9EE541ED implements Description
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the description if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the description if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
