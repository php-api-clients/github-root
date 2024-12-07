<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6229AFD3\T64100D1F\T8D5C869C;

use ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited\Changes\AuthorizedActorNames;

abstract readonly class T17A05C57 implements AuthorizedActorNames
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public array $from)
    {
    }
}
