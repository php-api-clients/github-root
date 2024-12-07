<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T359AA3A3\T8E01C5FA\TFDCA314F;

use ApiClients\Client\GitHub\Contract\MilestonedIssueEvent\Milestone;

abstract readonly class T344F71DC implements Milestone
{
    public const SCHEMA_JSON         = '{
    "required": [
        "title"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated"
}';

    public function __construct(public string $title)
    {
    }
}
