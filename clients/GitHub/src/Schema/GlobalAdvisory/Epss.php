<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\GlobalAdvisory;

final readonly class Epss implements \ApiClients\Client\GitHub\Contract\GlobalAdvisory\Epss
{
    const SCHEMA_JSON = '{
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
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "percentage": 10,
    "percentile": 10
}';
    public function __construct(public null|int|float $percentage, public null|int|float $percentile)
    {
    }
}
