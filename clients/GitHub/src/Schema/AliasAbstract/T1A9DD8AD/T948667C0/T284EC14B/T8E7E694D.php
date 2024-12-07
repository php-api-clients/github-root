<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T1A9DD8AD\T948667C0\T284EC14B;

use ApiClients\Client\GitHub\Contract\WebhookProjectsV2StatusUpdateEdited\Changes\StartDate;

abstract readonly class T8E7E694D implements StartDate
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "string",
                "null"
            ],
            "format": "date"
        },
        "to": {
            "type": [
                "string",
                "null"
            ],
            "format": "date"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated",
    "to": "generated"
}';

    public function __construct(public string|null $from, public string|null $to)
    {
    }
}
