<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF77B7BEE\TD3678F70\T1DF1EADE;

abstract readonly class TBE02277D implements \ApiClients\Client\GitHub\Contract\TimelineReviewedEvent\Links\Html
{
    const SCHEMA_JSON = '{
    "required": [
        "href"
    ],
    "type": "object",
    "properties": {
        "href": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "href": "generated"
}';
    public function __construct(public string $href)
    {
    }
}
