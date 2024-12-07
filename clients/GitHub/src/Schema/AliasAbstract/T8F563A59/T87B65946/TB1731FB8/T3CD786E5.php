<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T8F563A59\T87B65946\TB1731FB8;

use ApiClients\Client\GitHub\Contract\GlobalAdvisory\Cvss;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class T3CD786E5 implements Cvss
{
    public const SCHEMA_JSON         = '{
    "required": [
        "vector_string",
        "score"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "vector_string": {
            "type": [
                "string",
                "null"
            ],
            "description": "The CVSS vector."
        },
        "score": {
            "maximum": 10,
            "minimum": 0,
            "type": [
                "number",
                "null"
            ],
            "description": "The CVSS score.",
            "readOnly": true
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "vector_string": "generated",
    "score": 5
}';

    /**
     * vectorString: The CVSS vector.
     * score: The CVSS score.
     */
    public function __construct(#[MapFrom('vector_string')]
    public string|null $vectorString, public int|float|null $score,)
    {
    }
}
