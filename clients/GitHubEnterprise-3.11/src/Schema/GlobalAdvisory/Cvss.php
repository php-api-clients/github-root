<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GlobalAdvisory;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Cvss
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
    "score": 0.5
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
