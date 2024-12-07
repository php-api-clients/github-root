<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GlobalAdvisory;

final readonly class Epss implements \ApiClients\Client\GitHub\Contract\GlobalAdvisory\Epss
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "percentage": {
            "type": "number"
        },
        "percentile": {
            "type": "number"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "percentage": 10,
    "percentile": 10
}';

    public function __construct(public int|float|null $percentage, public int|float|null $percentile)
    {
    }
}
