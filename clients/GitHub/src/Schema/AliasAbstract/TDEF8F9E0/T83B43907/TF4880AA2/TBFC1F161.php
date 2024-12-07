<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TDEF8F9E0\T83B43907\TF4880AA2;

use ApiClients\Client\GitHub\Contract\WebhookLabelEdited\Changes\Name;

abstract readonly class TBFC1F161 implements Name
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the name if the action was `edited`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the name if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
