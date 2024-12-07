<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF72F794E\T2732DFB6\T73CCB569;

abstract readonly class T295F5040 implements \ApiClients\Client\GitHub\Contract\WebhookBranchProtectionRuleEdited\Changes\AdminEnforced
{
    const SCHEMA_JSON = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "boolean",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "from": false
}';
    public function __construct(public ?bool $from)
    {
    }
}
