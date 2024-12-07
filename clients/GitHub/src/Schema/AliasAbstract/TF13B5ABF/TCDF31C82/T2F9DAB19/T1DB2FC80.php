<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TF13B5ABF\TCDF31C82\T2F9DAB19;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Cwes;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T1DB2FC80 implements Cwes
{
    public const SCHEMA_JSON         = '{
    "required": [
        "cwe_id",
        "name"
    ],
    "type": "object",
    "properties": {
        "cwe_id": {
            "type": "string"
        },
        "name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "cwe_id": "generated",
    "name": "generated"
}';

    public function __construct(#[MapFrom('cwe_id')]
    public string $cweId, public string $name,)
    {
    }
}
