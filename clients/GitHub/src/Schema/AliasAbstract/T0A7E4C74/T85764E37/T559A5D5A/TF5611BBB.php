<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T0A7E4C74\T85764E37\T559A5D5A;

use ApiClients\Client\GitHub\Contract\WebhookRepositoryRulesetEdited\Changes\Conditions\Updated\Changes\Include_;

abstract readonly class TF5611BBB implements Include_
{
    public const SCHEMA_JSON         = '{
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

    public function __construct(public array|null $from)
    {
    }
}
