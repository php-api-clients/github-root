<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TA304CE1D\T51CDBA42\T045AA15C;

use ApiClients\Client\GitHub\Contract\WebhooksSecurityAdvisory\Cvss;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T0E7CC885 implements Cvss
{
    public const SCHEMA_JSON         = '{
    "required": [
        "vector_string",
        "score"
    ],
    "type": "object",
    "properties": {
        "score": {
            "type": "number"
        },
        "vector_string": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "score": 5,
    "vector_string": "generated"
}';

    public function __construct(public int|float $score, #[MapFrom('vector_string')]
    public string|null $vectorString,)
    {
    }
}
