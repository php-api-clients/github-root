<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TBC412A5C\TB1250D28\TE40F86F2;

use ApiClients\Client\GitHub\Contract\GlobalAdvisory\Cwes;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TCB1A3AB3 implements Cwes
{
    public const SCHEMA_JSON         = '{
    "required": [
        "cwe_id",
        "name"
    ],
    "type": "object",
    "properties": {
        "cwe_id": {
            "type": "string",
            "description": "The Common Weakness Enumeration (CWE) identifier."
        },
        "name": {
            "type": "string",
            "description": "The name of the CWE.",
            "readOnly": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "cwe_id": "generated",
    "name": "generated"
}';

    /**
     * cweId: The Common Weakness Enumeration (CWE) identifier.
     * name: The name of the CWE.
     */
    public function __construct(#[MapFrom('cwe_id')]
    public string $cweId, public string $name,)
    {
    }
}
