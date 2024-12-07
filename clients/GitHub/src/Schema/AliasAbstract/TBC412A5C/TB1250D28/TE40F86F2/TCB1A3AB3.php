<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TBC412A5C\TB1250D28\TE40F86F2;

abstract readonly class TCB1A3AB3 implements \ApiClients\Client\GitHub\Contract\GlobalAdvisory\Cwes
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "cwe_id": "generated",
    "name": "generated"
}';
    /**
     * cweId: The Common Weakness Enumeration (CWE) identifier.
     * name: The name of the CWE.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
