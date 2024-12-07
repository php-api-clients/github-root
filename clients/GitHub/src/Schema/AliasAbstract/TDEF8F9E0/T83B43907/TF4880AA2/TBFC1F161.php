<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TDEF8F9E0\T83B43907\TF4880AA2;

abstract readonly class TBFC1F161 implements \ApiClients\Client\GitHub\Contract\WebhookLabelEdited\Changes\Name
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';
    /**
     * from: The previous version of the name if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
