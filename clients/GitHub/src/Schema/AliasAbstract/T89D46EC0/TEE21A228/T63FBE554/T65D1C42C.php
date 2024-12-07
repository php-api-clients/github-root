<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T89D46EC0\TEE21A228\T63FBE554;

use ApiClients\Client\GitHub\Contract\LabeledIssueEvent\Label;

abstract readonly class T65D1C42C implements Label
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "color"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "color": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "color": "generated"
}';

    public function __construct(public string $name, public string $color)
    {
    }
}
